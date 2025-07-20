@extends('frontend.layout.admin')

@section('content')

@include('frontend.admin.layout.navbar')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))

<script>
  Swal.fire({
    icon: 'success',
    title: 'ยินดีต้อนรับ!',
    text: '{{ session("success") }}',
    showConfirmButton: false,
    timer: 2000
  });
</script>
@endif

<div class="min-h-screen bg-gray-50 py-6 px-4 sm:px-6 lg:px-8">
  <div class="max-w-4xl mx-auto space-y-10">

    <div class="text-gray-700 text-base sm:text-lg font-semibold text-center sm:text-left">
      👤 ผู้ดูแลระบบ: {{ Auth::guard('admin')->user()->email ?? 'ชื่อผู้ใช้ไม่ระบุ' }}
    </div>
@if ($errors->any())
 
  <script>
    Swal.fire({
      icon: 'error',
      title: 'เกิดข้อผิดพลาด!',
      html: `{!! implode('<br>', $errors->all()) !!}`,
      confirmButtonText: 'ปิด',
    });
  </script>
@endif


    <!-- กล่องฟอร์มโพสต์ -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 sm:p-6">
      <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-600" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        เพิ่มโพสต์ใหม่
      </h2>

      <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <input name="title" type="text" placeholder="หัวข้อโพสต์..." required
          class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <textarea name="description" rows="3" placeholder="คำอธิบาย..."
          class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>

        <!-- กล่องรูปภาพ -->
        <div id="imageInputs" class="space-y-4">
          <div class="relative image-upload-item">
            <label class="block">
              <span class="text-sm text-gray-700 font-medium">เลือกรูปภาพ</span>
              <input type="file" name="images[]" accept="image/*" multiple required class="hidden"
                onchange="handleFileInput(this)">
              <div class="mt-2 flex flex-col sm:flex-row items-start sm:items-center gap-3">
                <button type="button"
                  class="choose-btn px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md shadow-sm transition"
                  onclick="this.closest('label').querySelector('input[type=file]').click()">
                  📁 เลือกรูปภาพ
                </button>
                <span class="file-label text-sm text-gray-500">ยังไม่ได้เลือกรูป</span>
              </div>
              <div class="mt-3 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 preview-container"></div>
            </label>
          </div>
        </div>

        <button type="button" onclick="addImageInput()"
          class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 rounded-lg border border-gray-300 transition text-sm">
          ➕ เพิ่มอีกรูป
        </button>

        <button type="submit"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg shadow-md transition flex items-center justify-center gap-2 text-sm sm:text-base">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M12 12V4m0 0l4 4m-4-4L8 8" />
          </svg>
          โพสต์ผลงาน
        </button>
      </form>
    </div>

    <!-- แสดงโพสต์ -->
    <div id="postContainer" class="space-y-8 mt-6"></div>
    <div id="paginationControls" class="flex flex-wrap justify-center mt-6 gap-2"></div>

  </div>
</div>

<!-- Modal ดูรูป -->
<div id="imgModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center p-4">
  <div class="relative w-full max-w-3xl">
    <img id="modalImg" class="w-full max-h-[80vh] object-contain rounded-lg shadow-lg border border-white" />
    <button onclick="closeModal()"
      class="absolute top-3 right-3 bg-white rounded-full p-2 shadow-lg hover:bg-gray-200 text-sm sm:text-base">❌</button>
  </div>
</div>
<script>
  const MAX_FILES = 5;

  function getTotalSelectedFiles() {
    const inputs = document.querySelectorAll('input[type="file"][name="images[]"]');
    let total = 0;
    inputs.forEach(input => {
      total += input.files.length;
    });
    return total;
  }

  function handleFileInput(input) {
    const label = input.closest('label');
    const fileLabel = label.querySelector('.file-label');
    const preview = label.querySelector('.preview-container');

    // นับไฟล์รวมทั้งหมด
    const totalFiles = getTotalSelectedFiles();

    if (totalFiles > MAX_FILES) {
      Swal.fire({
        icon: 'warning',
        title: 'เลือกรูปเยอะเกินไป!',
        text: `คุณสามารถเลือกรูปได้ไม่เกิน ${MAX_FILES} รูปเท่านั้น`,
        confirmButtonText: 'เข้าใจแล้ว',
      });

      input.value = ""; // รีเซ็ต input นี้
      fileLabel.textContent = 'ยังไม่ได้เลือกรูป';
      preview.innerHTML = '';
      return;
    }

    fileLabel.textContent = input.files.length > 0
      ? `${input.files.length} ไฟล์ที่เลือก`
      : 'ยังไม่ได้เลือกรูป';

    preview.innerHTML = '';
    Array.from(input.files).forEach(file => {
      if (!file.type.startsWith('image/')) return;
      const reader = new FileReader();
      reader.onload = e => {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.className = 'rounded shadow border';
        img.style.maxHeight = '120px';
        preview.appendChild(img);
      };
      reader.readAsDataURL(file);
    });
  }
</script>

<script>
  const rawData = @json($works);
  const allGroups = Object.entries(rawData).map(([title, group]) => ({
    id: group[0].id,
    title: title,
    created_at: group[0].created_at,
    description: group[0].description,
    images: group.map(w => w.image)
  }));

  const postContainer = document.getElementById("postContainer");
  const pagination = document.getElementById("paginationControls");
  let currentPage = 1;
  const perPage = 3;

  function handleFileInput(input) {
    const label = input.closest('label');
    const fileLabel = label.querySelector('.file-label');
    const preview = label.querySelector('.preview-container');

    fileLabel.textContent = input.files.length > 0
      ? `${input.files.length} ไฟล์ที่เลือก`
      : 'ยังไม่ได้เลือกรูป';

    preview.innerHTML = '';
    Array.from(input.files).forEach(file => {
      if (!file.type.startsWith('image/')) return;
      const reader = new FileReader();
      reader.onload = e => {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.className = 'rounded shadow border';
        img.style.maxHeight = '120px';
        preview.appendChild(img);
      };
      reader.readAsDataURL(file);
    });
  }

  function addImageInput() {
    const wrapper = document.createElement('div');
    wrapper.className = 'relative image-upload-item';
    wrapper.innerHTML = `
      <label class="block">
        <span class="text-sm text-gray-700 font-medium">เลือกรูปภาพ</span>
        <input type="file" name="images[]" accept="image/*" required class="hidden" onchange="handleFileInput(this)">
        <div class="mt-2 flex items-center gap-3">
          <button type="button"
            class="choose-btn inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-md shadow-sm transition"
            onclick="this.closest('label').querySelector('input[type=file]').click()">
            📁 เลือกรูปภาพ
          </button>
          <span class="file-label text-sm text-gray-500">ยังไม่ได้เลือกรูป</span>
        </div>
        <div class="mt-3 grid grid-cols-3 gap-2 preview-container"></div>
      </label>
      <button type="button" onclick="this.closest('.image-upload-item').remove()"
        class="absolute top-2 right-2 text-xs text-red-600 hover:underline">ลบช่องนี้</button>
    `;
    document.getElementById('imageInputs').appendChild(wrapper);
  }

  function renderPosts() {
    postContainer.innerHTML = "";
    const start = (currentPage - 1) * perPage;
    const pageItems = allGroups.slice(start, start + perPage);

    for (const post of pageItems) {
      const imgs = post.images.map((img) => `
        <div class="relative group overflow-hidden rounded border border-gray-200">
          <img src="/storage/works/${img}" class="object-cover w-full h-40 sm:h-48 rounded transition duration-200 group-hover:brightness-75 cursor-pointer"
            onclick="openModal('/storage/works/${img}')" onerror="this.closest('.relative').style.display='none'" />
        </div>
      `).join("");

      postContainer.innerHTML += `
       <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
  <div class="p-5 border-b border-gray-200">
    <div class="flex justify-between items-start gap-4 flex-wrap">
      <div class="min-w-0 flex-1">
        <h3 class="text-lg font-bold text-gray-800 break-words line-clamp-1">${post.title}</h3>
        <p class="text-sm text-gray-500">โพสต์เมื่อ ${new Date(post.created_at).toLocaleDateString()}</p>
        ${post.description
          ? `<p class="text-gray-600 mt-2 italic break-words whitespace-normal line-clamp-2">${post.description}</p>`
          : ""}
      </div>
      <div class="space-y-2 text-end shrink-0">
        <a href="/admin/works/${post.id}/edit" class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded text-sm">แก้ไข</a>
        <form action="/admin/works/${post.id}" method="POST" onsubmit="return confirm('ยืนยันการลบ?')" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">ลบโพสต์</button>
        </form>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 p-3">${imgs}</div>
</div>

      `;
    }

    renderPagination();
  }

  function openModal(src) {
    document.getElementById("modalImg").src = src;
    document.getElementById("imgModal").classList.remove("hidden");
    document.getElementById("imgModal").classList.add("flex");
  }

  function closeModal() {
    document.getElementById("imgModal").classList.add("hidden");
    document.getElementById("imgModal").classList.remove("flex");
  }

  function goToPage(page) {
    currentPage = page;
    renderPosts();
  }

  function renderPagination() {
    pagination.innerHTML = "";
    const totalPages = Math.ceil(allGroups.length / perPage);
    for (let i = 1; i <= totalPages; i++) {
      pagination.innerHTML += `
        <button onclick="goToPage(${i})"
          class="px-4 py-2 rounded ${i === currentPage ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'}">
          ${i}
        </button>
      `;
    }
  }

  renderPosts();
</script>

@include('frontend.admin.layout.footer')
@endsection
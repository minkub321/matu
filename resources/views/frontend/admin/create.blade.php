@extends('frontend.layout.admin')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-slate-100 to-white py-10">
  <div class="max-w-xl mx-auto space-y-6">

    {{-- โปรไฟล์โพสต์ --}}
    <div class="flex items-center gap-3">
      <img src="{{ asset('img/admin-avatar.png') }}" class="w-12 h-12 rounded-full object-cover border-2 border-white shadow">
      <div>
        <h2 class="text-lg font-bold text-gray-800">มิน แอดมิน</h2>
        <p class="text-sm text-gray-400">โพสต์ล่าสุด • {{ now()->diffForHumans() }}</p>
      </div>
    </div>

    {{-- ฟอร์มโพสต์ --}}
    <div class="bg-white shadow-xl rounded-2xl p-6">
      <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="title" rows="2" class="w-full p-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-300" placeholder="คุณกำลังคิดอะไรอยู่?" required></textarea>
        <textarea name="description" rows="3" class="w-full mt-3 p-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-300" placeholder="รายละเอียดเพิ่มเติม..."></textarea>
        <input type="file" name="image" accept="image/*" class="mt-3 block w-full text-sm text-gray-500 file:bg-blue-50 file:border file:border-blue-200 file:rounded-full file:px-4 file:py-2 file:mr-3 hover:file:bg-blue-100 transition" required>
        <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-xl transition flex items-center justify-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1M12 12v4m0 0V8m0 8l-3-3m3 3l3-3"></path>
          </svg>
          โพสต์ผลงาน
        </button>
      </form>
    </div>

    {{-- ลูปแสดงผลงาน --}}
    @foreach ($works as $work)
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
      <div class="flex items-center px-4 py-3 gap-3">
        <img src="{{ asset('img/admin-avatar.png') }}" class="w-10 h-10 rounded-full object-cover">
        <div>
          <p class="font-semibold text-gray-800">มิน แอดมิน</p>
          <p class="text-sm text-gray-400">{{ $work->created_at->diffForHumans() }}</p>
        </div>
      </div>
      <img src="{{ asset('storage/works/' . $work->image) }}" alt="{{ $work->title }}" class="w-full object-cover max-h-[400px]">
      <div class="px-4 py-3">
        <h3 class="font-bold text-gray-800 text-lg">{{ $work->title }}</h3>
        <p class="text-gray-600 mt-1">{{ $work->description }}</p>
        <div class="flex justify-between mt-4">
          <a href="{{ route('admin.works.edit', $work->id) }}" class="text-sm font-medium text-blue-600 hover:underline flex items-center gap-1">
            ✏️ แก้ไข
          </a>
          <form action="{{ route('admin.works.destroy', $work->id) }}" method="POST" onsubmit="return confirm('แน่ใจว่าต้องการลบ?')">
            @csrf @method('DELETE')
            <button class="text-sm font-medium text-red-500 hover:underline flex items-center gap-1">🗑️ ลบ</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
@endsection

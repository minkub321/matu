<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>เข้าสู่ระบบแอดมิน</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logoตู่.png') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-gray-400 min-h-screen flex items-center justify-center p-4">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
  body{
    font-family:Kanit;
  }
</style>
@if ($errors->any())
<script>
  Swal.fire({
    icon: 'error',
    title: 'เข้าสู่ระบบล้มเหลว',
    text: '{{ $errors->first() }}',
    confirmButtonColor: '#d33'
  })
</script>
@endif

<div class="bg-gray-200 p-10 rounded-lg shadow-lg w-full max-w-md">


    <!-- Avatar & Info -->
    <div class="flex flex-wrap gap-5 items-center w-full max-md:max-w-full mb-10">
      <div class="flex flex-wrap flex-1 shrink gap-5 items-center basis-0 min-w-[240px] max-md:max-w-full">
        <div class="flex relative flex-col justify-center bg-gray-100 h-[70px] rounded-[16px] overflow-hidden w-[70px]">
          <div class="w-[100px] h-[100px] aspect-auto">
            <!-- ใช้ SVG ตามต้นฉบับ -->
            <!-- หรือเปลี่ยนเป็น <img src="..." alt="avatar" class="w-full h-full object-cover"> ได้เลย -->
             <a href="{{route('hompagemamumi')}}">
            <img src="{{ asset('assets/images/logoตู่.png') }}" alt=""></a>
          </div>
        </div>
        <div class="flex flex-col my-auto min-w-[240px]">
          <div class="text-base text-gray-800 font-semibold">D MAK 24 </div>
          <div class="mt-2 text-sm text-gray-500">บริษัท ดีมาก 24 จำกัด</div>
        </div>
      </div>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-6 mb-10">
      @csrf
      <div class="relative">
        <input
          type="email"
          name="email"
          id="email"
          required
          placeholder=" "
          class="peer block w-full text-sm h-[50px] px-4 text-slate-900 bg-white border border-violet-200 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-violet-400 focus:border-transparent"
        />
        <label for="email"
          class="absolute text-[14px] left-4 top-2 text-primary bg-white px-2 transition-all transform scale-75 -translate-y-[1.2rem] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-gray-400 peer-focus:scale-75 peer-focus:-translate-y-[1.2rem] peer-focus:top-2 peer-focus:text-primary">
          Email
        </label>
      </div>

      <div class="relative">
        <input
          type="password"
          name="password"
          id="password"
          required
          placeholder=" "
          class="peer block w-full text-sm h-[50px] px-4 text-slate-900 bg-white border border-violet-200 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-violet-400 focus:border-transparent"
        />
        <label for="password"
          class="absolute text-[14px] left-4 top-2 text-primary bg-white px-2 transition-all transform scale-75 -translate-y-[1.2rem] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-gray-400 peer-focus:scale-75 peer-focus:-translate-y-[1.2rem] peer-focus:top-2 peer-focus:text-primary">
          Password
        </label>
      </div>

      @if ($errors->any())
        <div class="text-red-500 text-sm">{{ $errors->first() }}</div>
      @endif

      <!-- Buttons -->
      <div class="sm:flex sm:flex-row-reverse flex gap-4">
        <button
          type="submit"
          class="w-fit rounded-lg text-sm px-5 py-2 h-[50px] border bg-violet-500 hover:bg-violet-600 focus:bg-violet-700 text-white focus:ring-4 focus:ring-violet-200 transition-all duration-300"
        >
          <div class="flex gap-2 items-center">เข้าสู่ระบบ</div>
        </button>
       <a href="{{ route('hompagemamumi') }}"
  class="w-fit inline-block rounded-lg text-sm px-5 py-2 h-[50px] border bg-transparent border-primary text-primary focus:ring-4 focus:ring-gray-100 text-center">
  ยกเลิก
</a>

      </div>
    </form>

  </div>

</body>
</html>

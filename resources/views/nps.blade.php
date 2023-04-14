
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <title> نظرسنجی آکادمی امروز </title>
</head>

<body class="bg-neutral-100" dir="rtl" style="font-family: iransansxfanum;">
  <!--header-->
  <header class="bg-white py-4 flex justify-between px-6 shadow-sm shadow-neutral-400 ">
    <div>
      <img src="logo.png" alt="لوگوی آکادمی امروز" width="200">
    </div>
    <div>

    </div>
  </header>
  <!--title of page-->
  <div class="max-w-4xl mx-auto mt-8" x-data="{
    selectedRate : null,
  }">
    <div class="mx-2 space-y-5 ">

      <h1 class="text-center font-bold text-xl">نظرسنجی آکادمی امروز</h1>
      <!--qustion box-->
      <form class="bg-white shadow-lg rounded-2xl p-8 space-y-12" action="/save_nps" method="POST">
        @csrf
        <!--text of qestion-->
        <div class="flex space-x-4 space-x-reverse justify-center text-lg text-neutral-700">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
          </svg>

          <p> از 0 تا 10 چقدر احتمال دارد دوره پزشکیتو
            آکادمی
            امروز را به دوستان خود معرفی کنید؟</p>
        </div>
        <!--radio boxes of qestion-->
        <div class="max-w-lg mx-auto space-y-2">
          <!--guid of radio boxes-->
          <div>
            <input type="option" class="hidden" name="rate" value="0" id="option_0">
            <input type="option" class="hidden" name="rate" value="1" id="option_1">
            <input type="option" class="hidden" name="rate" value="2" id="option_2">
            <input type="option" class="hidden" name="rate" value="3" id="option_3">
            <input type="option" class="hidden" name="rate" value="4" id="option_4">
            <input type="option" class="hidden" name="rate" value="5" id="option_5">
            <input type="option" class="hidden" name="rate" value="6" id="option_6">
            <input type="option" class="hidden" name="rate" value="7" id="option_7">
            <input type="option" class="hidden" name="rate" value="8" id="option_8">
            <input type="option" class="hidden" name="rate" value="9" id="option_9">
            <input type="option" class="hidden" name="rate" value="10" id="option_10">
          </div>
          <div class="flex space-x-2 justify-between flex-row-reverse select-none ">
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=0" :class="selectedRate == 0 ? 'bg-neutral-500 text-white' : 'bg-white'"
              for="option_0">0</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=1" :class="selectedRate == 1 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_1">1</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=2" :class="selectedRate == 2 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_2">2</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=3" :class="selectedRate == 3 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_3">3</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=4" :class="selectedRate == 4 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_4">4</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=5" :class="selectedRate == 5 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_5">5</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=6" :class="selectedRate == 6 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_6">6</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=7" :class="selectedRate == 7 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_7">7</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=8" :class="selectedRate == 8 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_8">8</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=9" :class="selectedRate == 9 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_9">9</label>
            <label
              class="hover:cursor-pointer w-10 h-10 border rounded-md flex justify-center items-center text-neutral-400"
              @click="selectedRate=10" :class="selectedRate ==10 ?'bg-neutral-500 text-white':'bg-white'"
              for="option_10">10</label>
          </div>

          <div class="flex justify-between text-xs text-neutral-400">
            <span>خیلی زیاد</span>
            <span>خیلی کم</span>
          </div>
        </div>
        <div class="flex justify-center ">
          <!--button for submit-->
          <button class="rounded-md  w-32 h-10 justify-center"
            type="submit"
            :class="selectedRate == null ? 'bg-neutral-200 text-neutral-400' : 'bg-orange-400 text-neutral-600'">
            ثبت نظر
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="/dist/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONE HOME</title>
    <link rel="shortcut icon" href="public/img/iconBar.ico">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="flex justify-start w-full bg-primaryColor box-border p-3">
        <!-- LOGO -->
        <section class="p-2 ">
            <a href="index.php">
                <img class="w-16 bg-gray-100 rounded-lg" src="public/img/logoTransparan.png" alt="logo">
            </a>
        </section>
        <!-- TITLE ONE HOME-->
        <section class="font-inter pl-2 mt-3">
            <h1 class="font-semibold text-4xl text-white">ONE HOME</h1>
            <h4 class="text-white font-medium text-xs mt-1">Centralized English Learning & Information System</h4>
        </section>
    </header>
    <main class="p-3 px-4 box-border min-h-[620px]">
        <article>
            <!-- GET STARTED -->
            <section class="flex justify-start gap-5 w-full box-border mt-3 mb-10 ">
                <div
                    class="flex justify-center items-center  w-[32%] h-32 bg-vektorColor shadow-vektorShadow rounded-lg">
                    <img class="w-full h-24" src="public/img/logoTransparan.png" alt="Get Started Vektor">
                </div>
                <div class="w-[68%]">
                    <h1 class="text-2xl font-semibold text-primaryColor">Get Started !!!</h1>
                    <p class="text-[8px] text-gray-400 leading-4">
                        Login as a student and start learning here. Enjoy various features that facilitate your learning
                        process, from digital attendance, learning materials, collecting assignments, to discussion
                        rooms.
                    </p>
                    <a href="public/login.php">
                        <button class="text-white text-xs font-semibold bg-primaryColor py-1 px-5 rounded-[5px] mt-2">
                            Login
                        </button>
                    </a>
                </div>
            </section>
            <!-- TEACHING MATERIAL -->
            <section class="flex justify-start gap-5 w-full box-border mb-10 ">
                <div class="w-[68%] text-right">
                    <h1 class="text-2xl font-semibold text-primaryColor">Teaching Materials</h1>
                    <p class="text-[10px] text-gray-400 leading-4">
                        Provides various reference sources of teaching materials for english subjects that can be
                        accessed by anyone. The materials available are very diverse and always updated according to the
                        curriculum.
                    </p>
                    <a href="public/login.php">
                        <button class="text-primaryColor text-xs font-semibold bg-white py-1 px-5 rounded-[5px] mt-2 
                            border-[1px] border-primaryColor">
                            Click Here
                        </button>
                    </a>
                </div>
                <div
                    class="flex justify-center items-center  w-[32%] h-32 bg-vektorColor shadow-vektorShadow rounded-lg">
                    <img class="w-full h-24" src="public/img/logoTransparan.png" alt="Get Started Vektor">
                </div>
            </section>
            <!-- QNA -->
            <section class="flex justify-start gap-5 w-full box-border mb-10 ">
                <div
                    class="flex justify-center items-center  w-[32%] h-32 bg-vektorColor shadow-vektorShadow rounded-lg">
                    <img class="w-full h-24" src="public/img/logoTransparan.png" alt="Get Started Vektor">
                </div>
                <div class="w-[68%]">
                    <h1 class="text-2xl font-semibold text-primaryColor">Question & Answer</h1>
                    <p class="text-[10px] text-gray-400 leading-4">
                        Want to know about your student's learning progress? Or just ask about our services? Click here,
                        ask a question, and we'll get back to you as soon as possible.
                    </p>
                    <a href="public/login.php">
                        <button class="text-primaryColor text-xs font-semibold bg-white py-1 px-5 rounded-[5px] mt-6
                        border-[1px] border-primaryColor">
                            Click Here
                        </button>
                    </a>
                </div>
            </section>
        </article>
        <!-- ABOUT US -->
        <section class="flex flex-col justify-center my-2">
            <div class="text-center">
                <h1 class="font-bold text-primaryColor text-3xl">ABOUT US</h1>
                <p class="text-[10px] text-gray-400 leading-4">
                    One Home is an e-learning website that aims to provide digital-based learning and class management
                    for English subjects for SMA Negeri 2 Raha students. In addition to making it easier for students,
                    this website can help parents to know their children's learning progress. Everything is neatly
                    wrapped up in the features we provide.
                </p>
            </div>
            <!-- CARD PROFIL -->
            <div
                class="flex justify-start gap-3 mt-6 w-80 bg-vektorColor p-3 rounded-lg shadow-vektorShadow self-center">
                <img class="w-16 h-16 rounded-lg" src="public/img/foto.png" alt="card about us">
                <div class="leading-5">
                    <h2 class="text-[12px] font-bold text-black">Yuliati Ponoi Malaha</h2>
                    <p class="text-[10px] text-gray-400">is a teacher at SMA Negeri 2 Raha who <br> initiated and became
                        the creator of One Home.</p>
                </div>
            </div>
        </section>
    </main>
    <footer class="flex justify-between gap-2 w-full bg-primaryColor mt-2 px-3 py-6 box-border">
        <!-- CREATED BY -->
        <section class=" p-1 box-border">
            <h1 class="text-white text-sm font-bold">Created By :</h1>
            <div class="flex justify-start items-center gap-2 text-[8px] text-white mt-3 ">
                <img class="w-12 h-12 rounded-full border" src="public/img/foto.png" alt="card footer">
                <div>
                    <h2 class="text-[12px] font-semibold">Yuliati Ponoi Malaha</h2>
                    <div class="flex justify-left items-center gap-1 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                            class="bi bi-envelope-open" viewBox="0 0 16 16">
                            <path
                                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2" />
                        </svg>
                        <p>yuliatipm@gmail.com</p>
                    </div>
                    <div class="flex justify-left items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                            class="bi bi-phone" viewBox="0 0 16 16">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                        <p>082262191159</p>
                    </div>
                    <div class="flex justify-left items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                            class="bi bi-mortarboard" viewBox="0 0 16 16">
                            <path
                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                            <path
                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
                        </svg>
                        <p>SMA Negeri 2 Raha</p>
                    </div>
                </div>
            </div>
            <!-- CARD SMAN 2 RAHA -->
            <a href="#">
                <div class="flex justify-start items-center gap-2 bg-white w-full p-1 rounded-lg box-border mt-5">
                    <div class="w-10 h-10 bg-neutral-700 rounded-lg">
                        <!-- <img src="" alt="Foto SMA 2"> -->
                    </div>
                    <div>
                        <h1 class="text-[14px] font-bold text-primaryColor">SMAN 2 RAHA</h1>
                        <div class="flex justify-left items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                                class="bi bi-envelope-open fill-primaryColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2" />
                            </svg>
                            <p class="text-[8px] text-primaryColor">smandara45@gmail.com</p>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!-- DEVELOPED BY -->
        <section class="border border-black">test</section>
        <!-- FEATURES -->
        <section class="border border-black">test</section>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Your Quiz</title>
</head>

<body class="bg-gray-200 h-screen flex items-center justify-center">

    <div class="bg-white m-20 rounded-lg shadow-lg  w-full h-3/4">

        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-8 p-8">
            <!-- Score Indicator -->
            <div class="text-gray-600">
                <p class="text-sm">Score: <span class="font-bold text-indigo-600 text-2xl">90</span></p>
            </div>
            <!-- Time Indicator -->
            <div class="text-gray-600">
                <p class="text-sm">Time Remaining: <span class="font-bold text-indigo-600 text-2xl">30s</span></p>
            </div>
            <!-- Question Number Indicator -->
            <div class="text-gray-600">
                <p class="text-sm">Question <span class="font-bold text-indigo-600 text-2xl">1</span>/10</p>
            </div>
        </div>

        <!-- Question -->
        <div class="text-center mb-6 ">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-extrabold text-black mb-10">Question 10</h2>
            </div>
        </div>

        <!-- Answer Choices -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mb-6 mt-20">
            <button
                class="w-full bg-red-500 text-white p-4 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300 text-2xl">
                <span class="text-xl font-bold text-white">A</span> A lot
            </button>
            <button
                class="w-full bg-blue-500 text-white p-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 text-2xl">
                <span class="text-xl font-bold text-white">B</span> Much
            </button>
            <button
                class="w-full bg-yellow-500 text-white p-4 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring focus:border-yellow-300 text-2xl">
                <span class="text-xl font-bold text-white">C</span> Many
            </button>
            <button
                class="w-full bg-green-500 text-white p-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-green-300 text-2xl">
                <span class="text-xl font-bold text-white">D</span> Some
            </button>
        </div>

        <!-- Bottom Bar -->
        <!-- <div class="flex justify-between items-center">
            <a href="index.php"
                class="text-sm  text-gray-600 hover:text-gray-800 focus:outline-none focus:underline text-2xl">Logout</a>
            <button
                class="bg-indigo-500 text-white px-4  py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:border-indigo-300 text-2xl">
                View Results
            </button>
        </div> -->

    </div>

</body>

</html>

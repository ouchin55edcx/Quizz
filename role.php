<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Your Website</title>
</head>

<body class="bg-gray-200 flex items-center justify-center h-screen">

    <!-- Kahoot-style info box -->
    <div class="info_box fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md">

            <div class="border-t border-gray-300">
                <div class="p-6">
                    <h1 class="text-2xl font-bold mb-4 text-center text-blue-600">Quiz Rules</h1>
                    <div class="text-md mb-4 text-gray-700">
                        <p>Before you start, please take a moment to review the rules of this quiz:</p>
                    </div>

                    <ul class="list-disc pl-5 mb-4 text-gray-800">
                        <li>You will have only <span class="font-bold">15 seconds</span> per each question.</li>
                        <li>Once you select your answer, it can't be undone.</li>
                        <li>You can't select any option once time goes off.</li>
                        <li>You can't exit from the Quiz while you're playing.</li>
                        <li>You'll get points on the basis of your correct answers.</li>
                    </ul>

                    <div class="flex justify-center">
                        <a href="index.php"
                            class="bg-red-500 hover:bg-red-600 text-white font-medium rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-red-300">Exit
                            Quiz</a>
                        <a href="question.php"
                            class="bg-green-500 hover:bg-green-600 text-white font-medium rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-green-300 ml-4">Continue</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>

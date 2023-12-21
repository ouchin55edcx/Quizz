<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Your Website</title>
</head>

<body class="bg-gray-200 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">

        <h1 class="text-2xl font-extrabold mb-4 text-center text-indigo-600">Enter Your Pseudo</h1>

        <form>
            <div class="mb-4">
                <label for="pseudo" class="block text-gray-600 text-sm font-medium mb-2">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="JohnDoe123">
            </div>

            <a href="role.php" type="submit"
                class="w-full bg-blue-500 text-white px-4 py-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Continue
            </a>
        </form>

    </div>

</body>

</html>

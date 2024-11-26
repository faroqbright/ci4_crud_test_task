<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Create Employee</h1>
        <form action="<?= site_url('employee/create'); ?>" method="post" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded mt-1" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Create Employee</button>
        </form>
        <a href="<?= site_url('employees'); ?>" class="text-blue-500 mt-4 inline-block">Back to Employee List</a>
    </div>
</body>
</html>

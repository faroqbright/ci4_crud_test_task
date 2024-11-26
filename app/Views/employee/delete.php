<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Are you sure you want to delete this employee?</h1>
        <div class="bg-white p-6 rounded shadow-md mb-4">
            <p><strong>Name:</strong> <?= esc($employee['name']); ?></p>
            <p><strong>Email:</strong> <?= esc($employee['email']); ?></p>
            <p><strong>Phone:</strong> <?= esc($employee['phone']); ?></p>
        </div>

        <form action="<?= site_url('employee/delete/' . $employee['id']); ?>" method="post">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Yes, Delete</button>
        </form>

        <a href="<?= site_url('employees'); ?>" class="text-blue-500 mt-4 inline-block">Cancel</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Employee List</h1>
        <a href="<?= site_url('employee/create'); ?>" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create New Employee</a>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left">Name</th>
                    <th class="py-2 px-4 text-left">Email</th>
                    <th class="py-2 px-4 text-left">Phone</th>
                    <th class="py-2 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4"><?= esc($employee['name']); ?></td>
                        <td class="py-2 px-4"><?= esc($employee['email']); ?></td>
                        <td class="py-2 px-4"><?= esc($employee['phone']); ?></td>
                        <td class="py-2 px-4">
                            <a href="<?= site_url('employee/update/' . $employee['id']); ?>" class="text-blue-500 hover:text-blue-700">Edit</a> | 
                            <a href="<?= site_url('employee/delete/' . $employee['id']); ?>" class="text-red-500 hover:text-red-700">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Hello Mr. <?php echo $_SESSION['user']; ?></h1>
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition" id="charger">
            Charger Les Users
        </button>
        <div class="mt-8">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-gray-600">Email</th>
                        <th class="border border-gray-300 px-4 py-2 text-gray-600">Ville</th>
                        <th class="border border-gray-300 px-4 py-2 text-gray-600">Nom </th>
                        <th class="border border-gray-300 px-4 py-2 text-gray-600">Prenom </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Empty table body -->
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
   $(document).ready(() => {
    $('#charger').click(() => {
        $.ajax({
            url: 'getusers.php',
            dataType: 'json',
            success: (data) => {
                console.log(data);

                const table = document.querySelector('table');
                const tbody = table.querySelector('tbody');
                tbody.innerHTML = '';

                data.forEach(user => {
                    const row = document.createElement('tr');

                    const colone1 = document.createElement('td');
                    colone1.textContent = user.email;

                    const colone2 = document.createElement('td');
                    colone2.textContent = user.titre;

                    const colone3 = document.createElement('td');
                    colone3.textContent = user.nom;

                    const colone4 = document.createElement('td');
                    colone4.textContent = user.prenom;

                    row.appendChild(colone1);
                    row.appendChild(colone2);
                    row.appendChild(colone3);
                    row.appendChild(colone4);

                    tbody.appendChild(row);
                });
            },
            error: (xhr, status, error) => {
                console.error("Erreur");
            }
        });
    });
});

</script>
</html>
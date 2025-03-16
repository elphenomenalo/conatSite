

<?php  
     require_once("../Fonctionnalty/editEventForm.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | EditEventForm</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>

<body>
    <form class="p-10 bg-white rounded shadow-xl" method="POST" enctype="multipart/form-data">
        <h1 class="text-center text-2xl">Modification d'évènement</h1>
        <input type="hidden" name="id" value="<?= $event['id'] ?>">
        <div class="">
            <label class="block text-sm text-gray-600" for="titre">Titre de l'évènement</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" value="<?= htmlspecialchars($event['titleEvent']) ?>" id="title" name="title" type="text" placeholder="Titre" aria-label="Name">
        </div>

        <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="message">Résumé de l'évènement</label>
            <textarea class="w-full px-5 text-gray-700 bg-gray-200 rounded" id="message" name="shortEvent" rows="6"  style="height: 7vh;"><?= htmlspecialchars($event['shortEvent']) ?></textarea>
        </div>
        <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="photo">Image de couverture</label>
            <input type="file" class="py-2" name="photo" id="photo">
        </div>
        <textarea id="editor" name="detailEvent"><?= htmlspecialchars($event['shortEvent']) ?></textarea>

       <div class="flex items-center justify-between">
       <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="submitEvent" type="submit">Modifier</button>
        </div>
        <div class="mt-6 border">
            <a href=""><button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">Retour</button></a>
        </div>
       </div>
    </form>
    <script>
        // Votre code JavaScript ici
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
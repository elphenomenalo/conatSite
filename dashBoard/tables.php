<!-- Inclure la navBar -->
<?php

include_once("../include/navBar.php");




?>
<!-- ============= -->

<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Les activités</h1>

        <div class="w-full mt-6">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Liste des évènements
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <?php if ($events) : ?>
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Titre</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Résumé</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            <?php foreach ($events as $event) : ?>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4"><?= htmlspecialchars($event["titleEvent"]) ?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?= htmlspecialchars($event["shortEvent"]) ?></td>
                                    <td class="text-left py-3 px-4">

                                       <div class="flex">
                                       <a href="editEventForm.php?id=<?= $event['id'] ?>" class="edit-icon mx-3" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Icône de suppression -->
                                        <a href="../Fonctionnalty/eventDelete.php?id=<?= $event['id']  ?>" class="delete-icon" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                       </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6" class="text-center py-3 px-4">Aucun évènement programmé pour le moment.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                </table>
            </div>

        </div>

        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Liste des programmes
            </p>
            <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                    <?php if ($programmes) : ?>
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Heure</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Lieu</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Activités</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            <?php foreach ($programmes as $programme) : ?>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4"><?= htmlspecialchars($programme["date"]) ?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?= htmlspecialchars($programme["heureStart"]) ?> <span> - </span> <?= htmlspecialchars($programme["heureEnd"]) ?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?= htmlspecialchars($programme["lieu"]) ?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?= htmlspecialchars(nl2br($programme["activity"])) ?></td>
                                    <td class="text-left py-3 px-4">

                                       <div class="flex">
                                       <a href="editProgrammeForm.php?id=<?= $programme['id'] ?>" class="edit-icon mx-3" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Icône de suppression -->
                                        <a href="../Fonctionnalty/programmeDelete.php?id=<?= $programme['id']  ?>" class="delete-icon" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                       </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6" class="text-center py-3 px-4">Aucun évènement programmé pour le moment.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                </table>
            </div>

        </div>

        <div class="w-full mt-6">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Liste des images de votre gallery
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Titre de l'image</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">Lian</td>
                            <td class="w-1/3 text-left py-3 px-4">
                            <div class="flex">
                                       <a href="editProgrammeForm.php?id=<?= $programme['id'] ?>" class="edit-icon mx-3" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Icône de suppression -->
                                        <a href="../Fonctionnalty/programmeDelete.php?id=<?= $programme['id']  ?>" class="delete-icon" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                       </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
        <div class="w-full mt-6">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Liste des logos de vos partenaires
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Titre de l'image</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">Lian</td>
                            <td class="w-1/3 text-left py-3 px-4">
                            <div class="flex">
                                       <a href="editProgrammeForm.php?id=<?= $programme['id'] ?>" class="edit-icon mx-3" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Icône de suppression -->
                                        <a href="../Fonctionnalty/programmeDelete.php?id=<?= $programme['id']  ?>" class="delete-icon" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                       </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </main>


</div>

</div>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
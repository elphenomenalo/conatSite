<!-- Inclure la navBar -->
<?php
     include_once("../include/navBar.php");
     
?>

<!-- ============= -->
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Forms</h1>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Ajouter un programme
                        </p>
                        <?php if(isset($errorMsg)){
                            '<p class="message">'. $errorMsg .'</p>';
                        } ?>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="POST">
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="date">Date</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="date"  aria-label="Name">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="time">Heure de début</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="time" name="time" type="time">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="times">Heure de Fin</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="times" name="timeEnd" type="time">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="lieu">Lieu</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="lieu" name="lieu" rows="6" placeholder="Lieu.." style="height: 7vh;"></textarea>
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="activity">Activité</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="activity" name="activity" rows="6" placeholder="Activité.." style="height: 10vh;"></textarea>
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="submitPro" type="submit">Ajouter</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Ajouter un évènement
                        </p>

                        <?php
                            if(isset($msgError)){
                                echo '<p class="message">' .$msgError.'</p>';
                            }elseif(isset($msgSuccess )){
                                echo '<p class="msgSuccess">'.$msgSuccess.'</p>';
                            }
                        ?>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" method="POST" enctype="multipart/form-data">
                                
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="titre">Titre de l'évènement</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text"  placeholder="Titre" aria-label="Name">
                                </div>
                               
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="message">Résumé de l'évènement</label>
                                    <textarea class="w-full px-5 text-gray-700 bg-gray-200 rounded" id="message" name="shortEvent" rows="6"  placeholder="Résumé.." style="height: 7vh;"></textarea>
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="photo">Image de couverture</label>
                                    <input type="file" class="py-2" name="photo" id="photo">
                                </div>
                                <textarea id="editor" name="detailEvent" placeholder="Rédiger votre évènement"></textarea>
                                
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="submitEvent" type="submit">Ajouter</button>
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
                        </div>
                        
                    </div>
                </div>
            </main>
        </div>
        
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>

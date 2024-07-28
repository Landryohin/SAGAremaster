 
 
// selectionner le nouveau document en fonction de depart ou interne etc....
    $('#selectTypeDoc').on('change',function(){
        $('#newDoc').trigger("click");
        
    })
// fin de selection de nouveau document en fonction de depart ou interne etc....


	        $(document).ready(function() {
            // Vérifiez si PDF.js est correctement chargé
            if (typeof pdfjsLib !== 'undefined') {
                console.log('PDF.js est correctement chargé.');
                pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';

                $("#documents_Chemin").on("change", function (e) {
                    var file = e.target.files[0];
                    if (file && file.type === "application/pdf") {
                        console.log('Fichier PDF sélectionné:', file.name);
                        var fileReader = new FileReader();
                        fileReader.onload = function () {
                            var pdfData = new Uint8Array(this.result);
                            var loadingTask = pdfjsLib.getDocument({ data: pdfData });
                            loadingTask.promise.then(function(pdf) {
                                console.log("PDF chargé");

                                // Fetch the first page
                                var pageNumber = 1;
                                pdf.getPage(pageNumber).then(function(page) {
                                    console.log("Page chargée");

                                    var scale = 1.0;
                                    var viewport = page.getViewport({ scale: scale });

                                    // Prepare canvas using PDF page dimensions
                                    var canvas = $("#pdfViewer")[0];
                                    var context = canvas.getContext("2d");
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;

                                    // Render PDF page into canvas context
                                    var renderContext = {
                                        canvasContext: context,
                                        viewport: viewport
                                    };
                                    var renderTask = page.render(renderContext);
                                    renderTask.promise.then(function() {
                                        console.log("Page rendue");
                                    });
                                });
                            }, function(reason) {
                                console.error("Erreur de chargement du PDF:", reason);
                            });
                        };
                        fileReader.readAsArrayBuffer(file);
                    } else {
                        alert('Veuillez sélectionner un fichier PDF.');
                        console.log('Fichier sélectionné n\'est pas un PDF.');
                    }
                });
            } else {
                console.error('PDF.js n\'est pas chargé.');
            }
        }) 

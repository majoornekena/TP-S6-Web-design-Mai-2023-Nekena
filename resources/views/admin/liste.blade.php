
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="E-Art ETU001670 le site de Hardi qui concerne l IA">
    <title>E-Art - ETU001670</title>
    <link rel="stylesheet" href="assets/Acc_Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/Acc_Admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/Acc_Admin/css/checkbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/33.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/Login/js/test.css">
</head>
<body id="page-top">
  <div id="wrapper">
    @include('template.SideBar')
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        @include('template.Header')
        <div class="container-fluid">
                
            <form action="{{ url('/recherche') }}" method="post">
                {{ csrf_field() }}      


                <div class="mb-3">
                    <div class="row">
                      <div class="col" style="color: rgb(0,0,0);"><label class="col-form-label">Titre:<input name="titre" class="form-control" type="text" style="color: rgb(0,0,0);"></label></div>
                    </div>
                  </div>      
<p>choisir entre deux dates</p>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col" style="color: rgb(0,0,0);"><label class="col-form-label"><input name="date1" class="form-control" type="date" style="color: rgb(0,0,0);"></label></div>
                      <div class="col" style="color: rgb(0,0,0);"><label class="col-form-label"><input name="date2" class="form-control" type="date" style="color: rgb(0,0,0);"></label></div>         
                    </div>
                  </div>         
                  
           
                
                  
                  <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray);border-style: none;">Rechercher</button></div>
      </form>
<div class="card-body">                
        <div class="col-xl-12 mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-plus"></i> Ajouter une nouvelle Article
</button>
    
<div class="row">
  @foreach($liste as $rows) 
    <div class="col-md-3">
      <div class="card">
        <img src="{{ $rows->img }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-title">{{ $rows->titre }}</h1>
          <h2 class="my-3">Auteur : {{ $rows->auteur }}</h2>
          <h3>publie le {{ $rows->datepublication }}</h3>
          <h4>publie le {{ $rows->resumer }}</h4>
          <p class="card-text">{{ $rows->contenu }}</p>
          <a class="btn btn-primary" href="{{ url('/Versupdate') }}/{{Str::slug($rows->titre) }}-{{ $rows->idarticle }}-modifier.html" style="background: var(--bs-gray);border-style: none;margin-top: 5px;">Modifier</a>
          <a class="btn btn-primary" href="{{ url('/delete') }}/{{ Str::random(10) }}.{{ $rows->idarticle }}.67y89.45h" style="background: var(--bs-gray);border-style: none;margin-top: 5px;">Supprimer</a>
        </div>
      </div>
    </div>
@endforeach
</div>  


  <nav aria-label="Page navigation example">
  <ul class="pagination">
<li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
<a class="page-link" href="{{ $currentPage == 1 ? '#' : url('/pagination') }}/{{ Str::random(10) }}.{{ $currentPage - 1 }}.pagination.html" aria-label="Précédent">
<span aria-hidden="true">&laquo;</span>
<span class="sr-only">Précédent</span>
</a>
</li>
@foreach($listeNumeroPage as $rows)
<li class="page-item {{ $rows == $currentPage ? 'active' : '' }}">
<a class="page-link" href="{{ url('/pagination') }}/{{ Str::random(10) }}.{{ $rows }}.pagination.html">{{ $rows }}</a>
</li>
@endforeach
<li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
<a class="page-link" href="{{ $currentPage == $lastPage ? '#' : url('/pagination') }}/{{ Str::random(10) }}.{{ $currentPage + 1 }}.pagination.html" aria-label="Suivant">
<span aria-hidden="true">&raquo;</span>
<span class="sr-only">Suivant</span>
</a>
</li>
</ul>

</nav>
  
                                         

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ajout Article</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  
    <form action="{{ url('/insererArticle') }}" method="post">

                {{ csrf_field() }}
              
                <label for="article_title">Titre de l'article:</label>
                <input type="text" id="article_title" name="titre" ><br><br>

                <label for="article_content">Contenu:</label><br>
                <textarea id="contenu" name="contenu"></textarea><br><br>
    

                <label for="article_summary">Resume:</label><br>
                <textarea id="article_summary" name="resumer"></textarea><br><br>


                <label for="article_title">Auteur:</label>
                <input type="text" id="article_title" name="auteur"><br><br>


                <p>image :
                        <input class="form-control" type="file" class="form-control" id="selectImage">
                        <input type="hidden" name="img" id="imageCode">
                    </p>

                  <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray);border-style: none;">ok</button></div>
              </form>            

              <script>
                const input = document.getElementById("selectImage");
                const imageCode = document.getElementById("imageCode");
                const convertBase64 = (file) => {
                    return new Promise((resolve, reject) => {
                        const fileReader = new FileReader();
                        fileReader.readAsDataURL(file);
                        fileReader.onload = () => {
                            resolve(fileReader.result);
                        };
                        fileReader.onerror = (error) => {
                            reject(error);
                        };
                    });
                };
                const uploadImage = async (event) => {
                    const file = event.target.files[0];
                    const base64 = await convertBase64(file);
                    imageCode.value = base64;
                    console.log(imageCode.value);
                };
                input.addEventListener("change", (e) => {
                    uploadImage(e);
                });
            </script>
            
              <script src="<?php echo asset('assets/Login/js/ckeditor.js') ?>"></script>
                                          <script>
                                            ClassicEditor
                                              .create( document.querySelector('#contenu'))
                                              .catch( error => {
                                                  console.error( error );
                                              } );
                                          </script>
                        
            
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
</div>
</div>
</div>
</div>
   
      
       
        </div>
              <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
              </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
            </div>
    <script src="assets/Acc_Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Acc_Admin/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js"></script>
    <script src="assets/Acc_Admin/js/theme.js"></script>
    <script src="assets/Acc_Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Acc_Admin/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js"></script>
    <script src="assets/Acc_Admin/js/theme.js"></script>
    <script src="https://kit.fontawesome.com/1234567890.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


</html>






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="ARTISTA, Site web de Nekena concernant l'IA">
    <title>ARTISTA</title>
    <link rel="stylesheet" href="assets/Acc_Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/Acc_Admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/Acc_Admin/css/checkbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/33.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/Login/js/test.css">
</head>

<style>
  #content-wrapper {
  padding: 20px;
}

.container-fluid {
  margin-bottom: 20px;
}

.form-control {
  color: #000000;
}

.btn-primary {
  background: var(--bs-gray);
  border-style: none;
  margin-top: 5px;
}

.card-title {
  font-size: 24px;
  font-weight: bold;
}

.my-3 {
  margin-top: 15px;
  margin-bottom: 15px;
}

.card-text {
  margin-bottom: 15px;
}

.pagination {
  margin-top: 20px;
  margin-bottom: 20px;
}

.modal-title {
  font-weight: bold;
}

.modal-body label {
  margin-top: 10px;
}

.modal-body textarea {
  width: 100%;
  height: 100px;
  resize: vertical;
  margin-bottom: 10px;
}

.modal-body p {
  margin-top: 10px;
  margin-bottom: 10px;
}

.modal-footer {
  justify-content: flex-start;
}

.close {
  font-size: 30px;
  color: #000000;
}

/* Styles pour les boutons */
.btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.btn-secondary {
  background-color: #6c757d;
  color: #fff;
}

.btn-secondary:hover {
  background-color: #4e555b;
}

/* Autres styles de boutons */

/* Exemple pour un bouton de couleur verte */
.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn-success:hover {
  background-color: #1e7e34;
}

/* Exemple pour un bouton de couleur rouge */
.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn-danger:hover {
  background-color: #a71d2a;
}

/* Exemple pour un bouton de couleur jaune */
.btn-warning {
  background-color: #ffc107;
  color: #000;
}

.btn-warning:hover {
  background-color: #e0a800;
}

/* Exemple pour un bouton de couleur grise */
.btn-light {
  background-color: #f8f9fa;
  color: #000;
}

.btn-light:hover {
  background-color: #e2e6ea;
}

/* Exemple pour un bouton de couleur sombre */
.btn-dark {
  background-color: #343a40;
  color: #fff;
}

.btn-dark:hover {
  background-color: #1d2124;
}


</style>


<body id="page-top">
<div id="wrapper">
 
  <div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
 
      <div class="container-fluid">

        <form action="{{ url('/update') }}" method="post" class="mt-3">

          {{ csrf_field() }}
          <input type="text" id="article_title" name="id" value="{{ $valeur->idarticle }}" class="form-control">

          <label for="article_title" class="mt-3">Titre de l'article:</label>
          <input type="text" id="article_title" name="titre" value="{{ $valeur->titre }}" class="form-control"><br><br>

          <label for="article_content">Contenu:</label><br>
          <textarea id="contenu" name="contenu" class="form-control">{{ $valeur->contenu }}</textarea><br><br>

          <label for="article_summary">Résumé:</label><br>
          <textarea id="article_summary" name="resumer" class="form-control">{{ $valeur->resumer }}</textarea><br><br>

          <label for="article_title">Auteur:</label>
          <input type="text" id="article_title" name="auteur" value="{{ $valeur->auteur }}" class="form-control"><br><br>

          <img src="{{ $valeur->img }}" width="100px" height="500px" alt="Product Image" class="card-img-top">
          <p class="mt-3">Image :
            <input class="form-control-file" type="file" id="selectImage">
            <input type="hidden" name="img" id="imageCode" value="{{ $valeur->img }}">
          </p>

          <div>
            <button type="submit">OK</button>
          </div>
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
            .create(document.querySelector('#contenu'))
            .catch(error => {
              console.error(error);
            });
        </script>
      </div>
    </div>
  </div>
</div>

            
    <script src="assets/Acc_Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Acc_Admin/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js"></script>
    <script src="assets/Acc_Admin/js/theme.js"></script>
</body>
</html>


</html>





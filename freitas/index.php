<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

    <div class="conteiner">
        <div><h3>Cadastro de Cliente</h3></div>
        <hr>
        <form>

            <!-- LINHA# 1 -->
            <div class="row">
                <div class="col-md-6">
                    <label for="nome" class="form-label">nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                
                <div class="col-md-3">
                        <label for="nascimento" class="form-label">data de nascimento:</label>
                        <input type="date" name="nascimento" class="form-control ">
                </div>
                <div class="col-md-3">
                        
                <div class="form-check mt-4">

                    <label>sexo</label>
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                             Default radio
                        </label>
                    </div>

                    <div class="form-check">

                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                         Default checked radio
                        </label>
                    </div>

            </div>
                </div>
                
            
            
            
            <!--linha2-->
                <div class="row">
                    
                    <div class="col-md-6">
                        <label>nome do pai:</label>
                        <input type="text" name="pai" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="mae" class="form-label">nome da mãe:</label>
                        <input type="text" name="mae" class="form-control ">
                    </div>

                </div>
             
        </form>
    </div>
</body>

</html>
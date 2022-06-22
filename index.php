<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Maaf........... </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script type="text/javascript">
flag=1
function f1()
{
    alert("Nah gitu dong, hehe!!")
    location.replace("utama.php")
}
function f()
{
    if(flag==1)
        {
            Bn.style.top=400
            Bn.style.left=300
            flag=2
        }
    else if(flag==2)
        {
            Bn.style.top=390
            Bn.style.left=30
            flag=3
        }
    else if(flag==3)
        {
            Bn.style.top=370
            Bn.style.left=166
            flag=1
        }
}
</script>

</head>
<body>

    <div>
        <h1 style="font-size: 25px;" class="ms-5 card-title  justify-content-center mt-5">Hi, Apen Junior</h1>
        <div class="card ms-5 me-5  justify-content-center" style="width: 18rem;">
            <svg width="200" height="200"
            xmlns="http://www.w3.org/2000/svg">
            <image href="assets/haha.gif" height="200" width="200"/>
          </svg>
            <div class="card-body pb-5 text-centerjustify-content-center">
              <h2 style="font-size: 25px;" class="card-title text-center">Maafin aku ya?</h2>
              <p class="card-text text-center">Maafin kemarin ga ngabarin kamu, bikin kamu khawatir, pokonya maafin aku :( ya ya ya?</p>
               <div id="By" style="position:absolute; left:30px; top:390px; width:210px;
          height:210px;">
          <input class="btn btn-primary button mt-4" type="button" value=" Ya, Mau!! " onClick="f1()" />
          </div>
          <div ID="Bn" style="position:absolute; left:166px; top: 390px; width:210px; height:210px;">
          <input class="btn btn-danger button mt-4" type="button" value=" Gk Mw " onMouseOver="f()" />
          </div>
            </div>
          </div>
</body>
</html>

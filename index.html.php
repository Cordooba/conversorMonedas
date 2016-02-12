<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Currency Converter</title>
    <!-- stylesheet -->
    <style media="screen">
      div.container{
        text-align: center;
        margin: 0 auto;
      }
      .btn {
        width: auto;
        background: #0090bf;
        border: 1px solid #1e728c;
        color: white;
        cursor: pointer;
        display: inline-block;
        /*Hack para IE6-7*/
        zoom: 1;
        *display: inline;
        margin: 0;
        outline: none;
        padding: 10px 20px 11px;
        position: relative;
        text-align: center;
        text-decoration: none;
        /*Sombras para la caja del botón*/
        -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
          -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
            /*Transition CSS*/
        -webkit-transition: background-color 0.15s ease-in-out;
          -moz-transition: background-color 0.15s ease-in-out;
            -o-transition: background-color 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out;
          }
        label {
          font-size: 30px;
          font-family: "Helevetica Neue", Helvetica, Arial, sans-serif;
        }
        p{
          font-size: 30px;
          font-family: "Helevetica Neue", Helvetica, Arial, sans-serif;
          text-align: center;
          color: red;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" media="screen" title="Normalize CSS" charset="utf-8">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Currency Converter</h1>
      </div>
      <!-- end div.container -->
    </header>
    <!-- end header -->
    <main>
      <div class="container">
        <div class="form-control">
          <form class="" action="?change" method="post">
            <div class="form-group">
              <label for="cantidad">Money :</label>
              <input type="text" name="num" value="Cantidad...">
              <select class="numTo" name="numTo">
                <option value="EUR">€ EURO</option>
                <option value="BRL">Brazilian real</option>
                <option value="JPY">Japanese yen</option>
                <option value="CHF">Swiss franc</option>
                <option value="USD">US dollar</option>
                <option value="MXN">Mexican peso</option>
                <option value="INR">Indian rupee</option>
              </select>
              <label for="to">  to  </label>
              <select class="toNum" name="toNum">
                <option value="USD">US dollar</option>
                <option value="JPY">Japanese yen</option>
                <option value="MXN">Mexican peso</option>
                <option value="CHF">Swiss franc</option>
                <option value="BRL">Brazilian real</option>
                <option value="EUR">€ EURO</option>
                <option value="INR">Indian rupee</option>
            </select>
            <input type="submit" class="btn" value="Confirm!">
          </div>
          <!-- end form-group -->
          </form>
          <!-- end form -->
        </div>
        <!-- end form-control -->
      </div>
      <!-- end div.container -->
      <?php if(isset($errores) && !empty($errores)) :?>
        <p>
          Debes introducir un dato numérico.
        </p>
      <?php endif ; ?>
      <?php if(isset($convertedValue)) : ?>
        <p>
          <?=$convertedValue->getNumber()?>
        </p>
      <?php endif; ?>
    </main>
  </body>
</html>

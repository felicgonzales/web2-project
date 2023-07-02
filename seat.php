<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>seat page</title>
    <link rel="stylesheet" href="seat.css" />
  </head>
  <body>
    <div class="movie-container">
      <label>Sun Plaza </label>
      <select id="movie">
        <option value="45000">Regular Rp 45.000</option>
        <option value="60000">Ultra Xd Rp 60.000</option>
      </select>

      <ul class="showcase">
        <li>
          <div class="seat"></div>
          <small>N/A</small>
        </li>
        <li>
          <div class="seat selected"></div>
          <small>Selected</small>
        </li>
        <li>
          <div class="seat occupied"></div>
          <small>Occupied</small>
        </li>
      </ul>

      <div class="container">
        <div class="screen">
          <h1>f - tix</h1>
          <h2>movie screen</h2>
        </div>

        <div class="row">
          <div class="seat">A1</div>
          <div class="seat">A2</div>
          <div class="seat">A3</div>
          <div class="seat">A4</div>
          <div class="seat">A5</div>
          <div class="seat">A6</div>
          <div class="seat">A7</div>
          <div class="seat">A8</div>
          <div class="seat">A9</div>
          <div class="seat">A10</div>
          <div class="seat">A11</div>
          <div class="seat">A12</div>
        </div>
        <div class="row">
          <div class="seat">B1</div>
          <div class="seat">B2</div>
          <div class="seat">B3</div>
          <div class="seat occupied">B4</div>
          <div class="seat occupied">B5</div>
          <div class="seat">B6</div>
          <div class="seat">B7</div>
          <div class="seat">B8</div>
          <div class="seat">B9</div>
          <div class="seat">B10</div>
          <div class="seat">B11</div>
          <div class="seat">B12</div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>

          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
        </div>

        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>

        <button class="btn" onclick="parent.location='food.html'">
          <p>
            <span id="count">0</span>
            seat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Rp.
            <span id="total">0</span>
          </p>
        </button>
      </div>
    </div>

    <script src="seat.js"></script>
  </body>
</html>

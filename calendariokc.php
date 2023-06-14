<!doctype html>
<html lang="en">
  <head>
  	<title>Calendar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<div class="princi">
    <div id="lo"> </div>
    <h3 id="lo"></h3>
    <div id="busca"> </div>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Fev</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Abr</td> 
				              <td class="month">Mai</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Ago</td> 
				              <td class="month">Set</td> 
				              <td class="month">Out</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dez</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Dom</td> 
				          <td class="day">Seg</td> 
				          <td class="day">Ter</td> 
				          <td class="day">Qua</td> 
				          <td class="day">Qui</td> 
				          <td class="day">Sex</td> 
				          <td class="day">Sab</td>
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
				        <button class="button" id="add-button">Adicionar compromisso</button>
				      </div>
				    </div>
				    <div class="events-container">
				    </div>
				    <div class="dialog" id="dialog">
				        <h2 class="dialog-header"> Adicionar compromisso </h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
				            <label class="form-label" id="valueFromMyButton" for="name">tipo de atendimento</label>
				            <input class="input" type="text" id="name" maxlength="36">
				            <label class="form-label" id="valueFromMyButton" for="count">Numero de atendimentos</label>
				            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
				            <input type="button" value="Cancelar" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

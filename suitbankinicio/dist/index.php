<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Status Bancário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css'><link rel="stylesheet" href="./style.css">
<link rel="icon" href="image/BytesLG.png">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="routes-container" style="background: linear-gradient(50deg, #f3c680, #a1e3e2);">
	<div class="balance-container">
		<div class="switch-container">
			<div class="switch-highlighter"></div>
			<div class="switch-toggle-selected" data-tab="0">
				<i class="toggle-icon fas fa-wallet"></i>
				<span class="toggle-text">Saldo</span>
			</div>
			<div class="switch-toggle" data-tab="1">
				<i class="toggle-icon fas fa-file-invoice-dollar"></i>
				<span class="toggle-text">Extrato</span>
			</div>
		</div>
		<div class="switch-carousel">
			<div class="carousel-cell cards-grid">
				<div class="card-balance">
					<div class="icon-card"></div>
					<div class="inner-card">
						<div class="label-card">Saldo disponível</div>
						<div class="value-card">2.350,00</div>
					</div>
				</div>
				<div class="card-blocked-balance">
					<div class="icon-card"></div>
					<div class="inner-card">
						<div class="label-card">Saldo bloqueado</div>
						<div class="value-card">482,58</div>
					</div>
				</div>
				<div class="card-total-balance">
					<div class="icon-card"></div>
					<div class="inner-card">
						<div class="label-card">Saldo total</div>
						<div class="value-card">2.350,00</div>
					</div>
				</div>
			</div>
			<div class="carousel-cell extract-card">
				<table class="extract-table">
					<thead>
						<th>Ação</th>
						<th>Data</th>
						<th>Hora</th>
						<th>Valor</th>
					</thead>
					<tbody>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>21 de Outubro</td>
							<td>15:15:43</td>
							<td class="transaction-value-negative">55,90</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>15 de Outubro</td>
							<td>12:32:08</td>
							<td class="transaction-value-negative">15,89</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>12 de Outubro</td>
							<td>20:15:25</td>
							<td class="transaction-value-positive">60,90</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>11 de Outubro</td>
							<td>09:23:10</td>
							<td class="transaction-value-positive">150,19</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>05 de Outubro</td>
							<td>11:13:07</td>
							<td class="transaction-value-negative">12,35</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>02 de Outubro</td>
							<td>20:30:48</td>
							<td class="transaction-value-negative">31,90</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>29 de Setembro</td>
							<td>19:45:05</td>
							<td class="transaction-value-positive">45,90</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>26 de Setembro</td>
							<td>20:15:03</td>
							<td class="transaction-value-negative">55,90</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>24 de Setembro</td>
							<td>13:38:54</td>
							<td class="transaction-value-positive">17,50</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
						<tr>
							<td class="transaction-action">Transferência</td>
							<td>21 de Setembro</td>
							<td>23:59:03</td>
							<td class="transaction-value-positive">145,90</td>
							<td>
								<button class="transaction-details-btn">+ Detalhes</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js'></script><script  src="./script.js"></script>

</body>
</html>

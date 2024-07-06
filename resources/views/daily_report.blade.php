<!DOCTYPE html>
<html>
<head>
    <title>Relatório diário de vendas</title>
</head>
<body>
    <h1>Relatório diário de vendas</h1>

    <p>Total de vendas: R$ {{ number_format($totalSales, 2, ',', '.') }}</p>
    <p>Total de comissão: R$ {{ number_format($totalCommission, 2, ',', '.') }}</p>
</body>
</html>

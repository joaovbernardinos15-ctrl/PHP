<?php 
include 'bancoevento.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID do evento não informado ou inválido. URL esperada: editar_evento.php?id=1");
}

$id = intval($_GET['id']);

$stmt = $eventos->prepare("SELECT * FROM evento WHERE id = ?");

if (!$stmt) {
    die("Erro ao preparar a query (verifique se a tabela 'evento' tem a coluna 'id'): " . $eventos->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$evento = $resultado->fetch_assoc();

if (!$evento) {
    die("Nenhum evento encontrado com id = $id.");
}

// MySQL TIME columns often come back as HH:MM:SS — trim to HH:MM for the time picker
$horario_valor = substr($evento['horario'], 0, 5);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

  <div class="page">
    <span class="eyebrow">Admit One · Editar Evento #<?php echo htmlspecialchars($evento['id']); ?></span>
    <div class="ticket-card">
   <form action="./atualizar_evento.php" method="POST">
        <h1>Editar Evento</h1>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($evento['id']); ?>">
        <div class="mb-3">
            <label for="nome_do_evento" class="form-label">Nome do Evento</label>
            <input type="text" class="form-control" id="nome_do_evento" name="nome_do_evento" value="<?php echo htmlspecialchars($evento['nome_do_evento']); ?>">
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="text" class="form-control" id="data" name="data" value="<?php echo htmlspecialchars($evento['data']); ?>" placeholder="dd/mm/aaaa" autocomplete="off">
            <div class="quick-picks">
                <button type="button" class="chip" data-days="0">Hoje</button>
                <button type="button" class="chip" data-days="1">Amanhã</button>
                <button type="button" class="chip" data-weekend="1">Fim de semana</button>
                <button type="button" class="chip" data-days="7">Em 1 semana</button>
            </div>
        </div>

        <div class="mb-3">
            <label for="horario" class="form-label">Horário</label>
            <input type="text" class="form-control" id="horario" name="horario" value="<?php echo htmlspecialchars($horario_valor); ?>" placeholder="hh:mm" autocomplete="off">
            <div class="quick-picks">
                <button type="button" class="chip" data-time="09:00">Manhã · 09:00</button>
                <button type="button" class="chip" data-time="14:00">Tarde · 14:00</button>
                <button type="button" class="chip" data-time="19:00">Noite · 19:00</button>
            </div>
        </div>

        <div class="mb-3">
            <label for="local" class="form-label">Local</label>
            <input type="text" class="form-control" id="local" name="local" value="<?php echo htmlspecialchars($evento['local']); ?>">
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo htmlspecialchars($evento['cidade']); ?>">
        </div>

        <div class="mb-3">
            <label for="vagas" class="form-label">Vagas</label>
            <input type="number" class="form-control" id="vagas" name="vagas" value="<?php echo htmlspecialchars($evento['vagas']); ?>">
        </div>
        
        <div class="button-container">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    </div>

    <p class="page-footer-link"><a href="lista_evento.php">← Voltar para a lista</a></p>
  </div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
<script>
flatpickr.localize(flatpickr.l10ns.pt);

const dataPicker = flatpickr("#data", {
    altInput: true,
    altFormat: "d/m/Y",
    dateFormat: "Y-m-d",
    disableMobile: true
});

const horarioPicker = flatpickr("#horario", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
    disableMobile: true
});

document.querySelectorAll('[data-days]').forEach(function (btn) {
    btn.addEventListener('click', function () {
        const d = new Date();
        d.setDate(d.getDate() + parseInt(btn.dataset.days, 10));
        dataPicker.setDate(d, true);
    });
});

document.querySelectorAll('[data-weekend]').forEach(function (btn) {
    btn.addEventListener('click', function () {
        const d = new Date();
        const diasParaSabado = (6 - d.getDay() + 7) % 7 || 7;
        d.setDate(d.getDate() + diasParaSabado);
        dataPicker.setDate(d, true);
    });
});

document.querySelectorAll('[data-time]').forEach(function (btn) {
    btn.addEventListener('click', function () {
        horarioPicker.setDate(btn.dataset.time, true);
    });
});
</script>

</body>
</html>
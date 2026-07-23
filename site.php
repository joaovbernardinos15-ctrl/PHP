<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

  <div class="page">
    <span class="eyebrow">Admit One · Novo Evento</span>
    <div class="ticket-card">
    <form action="./eventos.php" method="POST">
        <h1>Cadastro de Eventos</h1>
        <div class="mb-3">
            <label for="nome_do_evento" class="form-label">Nome do Evento</label>
            <input type="text" class="form-control" id="nome_do_evento" name="nome_do_evento">
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="dd/mm/aaaa" autocomplete="off">
            <div class="quick-picks">
                <button type="button" class="chip" data-days="0">Hoje</button>
                <button type="button" class="chip" data-days="1">Amanhã</button>
                <button type="button" class="chip" data-weekend="1">Fim de semana</button>
                <button type="button" class="chip" data-days="7">Em 1 semana</button>
            </div>
        </div>

        <div class="mb-3">
            <label for="horario" class="form-label">Horário</label>
            <input type="text" class="form-control" id="horario" name="horario" placeholder="hh:mm" autocomplete="off">
            <div class="quick-picks">
                <button type="button" class="chip" data-time="09:00">Manhã · 09:00</button>
                <button type="button" class="chip" data-time="14:00">Tarde · 14:00</button>
                <button type="button" class="chip" data-time="19:00">Noite · 19:00</button>
            </div>
        </div>

        <div class="mb-3">
            <label for="local" class="form-label">Local</label>
            <input type="text" class="form-control" id="local" name="local">
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
        </div>

        <div class="mb-3">
            <label for="vagas" class="form-label">Vagas</label>
            <input type="number" class="form-control" id="vagas" name="vagas">
        </div>
        
        <div class="button-container">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    </div>

    <p class="page-footer-link"><a href="lista_evento.php">Ver eventos cadastrados →</a></p>
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
<?php 
include 'bancoevento.php';

$sql = "SELECT * FROM evento";

$resultado = $eventos->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>

  <div class="page">
    <span class="eyebrow">Admit One · Eventos Cadastrados</span>
    <h1 style="margin-bottom: 20px;">Seus Eventos</h1>

    <div class="search-bar">
        <input type="text" id="busca-evento" placeholder="Pesquisar por nome, local ou cidade..." autocomplete="off">
    </div>

    <?php if ($resultado && $resultado->num_rows > 0): ?>
        <div class="event-list" id="lista-eventos">
        <?php while ($evento = $resultado->fetch_assoc()): ?>
            <?php
                $busca = mb_strtolower(
                    $evento["nome_do_evento"] . ' ' . $evento["local"] . ' ' . $evento["cidade"]
                );
            ?>
            <article class="event-ticket" data-busca="<?php echo htmlspecialchars($busca); ?>">
                <div class="event-main">
                    <h2 class="event-name"><?php echo htmlspecialchars($evento["nome_do_evento"]); ?></h2>
                    <div class="event-meta">
                        <div><span>Data</span><?php echo htmlspecialchars($evento["data"]); ?></div>
                        <div><span>Horário</span><?php echo htmlspecialchars($evento["horario"]); ?></div>
                        <div><span>Local</span><?php echo htmlspecialchars($evento["local"]); ?></div>
                        <div><span>Cidade</span><?php echo htmlspecialchars($evento["cidade"]); ?></div>
                        <div><span>Vagas</span><?php echo htmlspecialchars($evento["vagas"]); ?></div>
                    </div>
                </div>
                <div class="event-stub">
                    <a href="editar_evento.php?id=<?php echo $evento['id']; ?>"><button class="btn-edit">Editar</button></a>
                    <a href="excluir_evento.php?id=<?php echo $evento['id']; ?>"><button class="btn-delete">Excluir</button></a>
                </div>
            </article>
        <?php endwhile; ?>
        </div>
        <p class="event-empty" id="sem-resultados" style="display:none;">Nenhum evento encontrado para essa pesquisa.</p>
    <?php else: ?>
        <p class="event-empty">Nenhum evento cadastrado ainda.</p>
    <?php endif; ?>

    <p class="page-footer-link"><a href="site.php">+ Cadastrar novo evento</a></p>
  </div>

<script>
(function () {
    var input = document.getElementById('busca-evento');
    if (!input) return;

    var cards = document.querySelectorAll('#lista-eventos .event-ticket');
    var semResultados = document.getElementById('sem-resultados');

    function normalizar(texto) {
        return texto
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');
    }

    input.addEventListener('input', function () {
        var termo = normalizar(input.value.trim());
        var visiveis = 0;

        cards.forEach(function (card) {
            var alvo = normalizar(card.dataset.busca || '');
            var corresponde = termo === '' || alvo.indexOf(termo) !== -1;
            card.style.display = corresponde ? '' : 'none';
            if (corresponde) visiveis++;
        });

        if (semResultados) {
            semResultados.style.display = visiveis === 0 ? '' : 'none';
        }
    });
})();
</script>

</body>
</html>
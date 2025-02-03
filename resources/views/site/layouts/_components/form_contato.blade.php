{{ $slot }} <!-- Essa variável recebe o conteúdo enviado pela blade 
    que esta recebendo este componente. Pode assim ser enviado como
    um append para esse componente no contexto da blade que enviou -->

<!-- Metodo GET <form action = @{{ route('site.contato') }} method="get"> -->

<form action = {{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $classe }}"> <!-- Aqui esta sendo recebido das blades um parâmetro da variável classe, mudando a cor da borda baseado na blade do contexto -->
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
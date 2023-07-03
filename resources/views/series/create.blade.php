<x-layout title="nova série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
        <label for="nome" class="form-label">nome</label>
        <input type="text"name="nome"id="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary ">enviar</button>
    </form>

</x-layout>

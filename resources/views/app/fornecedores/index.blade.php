<h3>Fornecedor</h3>
<?= "texto de teste "?>
{{-- Comentário --}}
@php
//comentário
/*
comentário em bloco
*/
echo "Texto de teste";
@endphp



@if(count($fornecedores) > 0)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif  


@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}
    <br>
    Status: {{$fornecedores[0]['status']}}
    <br>
    {{-- @isset($fornecedores[0]['cnpj']) --}}
        CNPJ: {{$fornecedores[0]['cnpj'] ?? 'dado não preenchido'}}
        <br>
    {{-- @endisset --}}

    @unless ($fornecedores[0]['status'] == 'S')
        Fornecedor inativo
    @endunless
@endisset



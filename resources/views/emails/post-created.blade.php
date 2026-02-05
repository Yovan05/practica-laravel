<x-mail::message>
# Correo por aprobar

<x-mail::panel>
Se ha creado un nuevo post que necesita ser aprobado
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)"
    color="primary">
Click aqui para probar
</x-mail::button>

</x-mail::message>
<!-- Nombre Producto Field -->
<div class="form-group">
    {!! Form::label('nombre_producto', 'Nombre') !!}
    <p>{!! $producto->nombre_producto !!}</p>
</div>

<!-- Precio Producto Field -->
<div class="form-group">
    {!! Form::label('precio_producto', 'Precio') !!}
    <p>{!! $producto->precio_producto !!}</p>
</div>

<!-- Img Producto Field -->
<div class="form-group">
    {!! Form::label('img_producto', 'Img') !!}
    <p>{!! $producto->img_producto !!}</p>
</div>

<!-- Iva Id Field -->
<div class="form-group">
    {!! Form::label('iva_id', 'Iva') !!}
    <p>{!! $producto->iva_id !!}</p>
</div>

<!-- Sucursal Id Field -->
<div class="form-group">
    {!! Form::label('sucursal_id', 'Sucursal') !!}
    <p>{!! $producto->sucursal_id !!}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria') !!}
    <p>{!! $producto->categoria_id !!}</p>
</div>

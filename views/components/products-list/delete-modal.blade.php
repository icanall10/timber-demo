<div data-modal="product-delete-modal">

    <div class="modal-title">Удаление объявления</div>

    <div data-product-delete-modal-content>
        <p>Вы уверены, что хотите удалить объявлекние <b>{{ $product->name }}</b>?</p>

        <p>Это действие нельзя отменить.</p>

        <p class="actions flex flex-left">
            <a href="#" class="button small red"
               data-request="{{ $self->ajax('onDelete') }}"
               data-request-data='@json(['product_id' => $product->id])'
            >Да, удалить</a>

            <a href="#" class="button small"
               data-modal-close
            >Отмена</a>
        </p>
    </div>

</div>
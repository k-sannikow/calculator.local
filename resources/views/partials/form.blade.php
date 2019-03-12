<div class="form-row">
    <div class="col-sm mt-1">
        <input name="number1" value="{{ $number1 ?? old('number1', '') }}" placeholder="Введите первое число" class="form-control">
    </div>
    <div class="col-sm mt-1">
        <input name="number2" value="{{ $number2 ?? old('number2', '') }}" placeholder="Введите второе число" class="form-control">
    </div>
</div>

<div class ="form-row mt-3">
    <div class="col-sm mt-1">
        <button type="submit" name="operation" value="addition" id="addition" class="btn btn-outline-secondary btn-block">
            Сложить
        </button>
    </div>

    <div class="col-sm mt-1">
        <button type="submit" name="operation" value="subtraction" id="subtraction" class="btn btn-outline-secondary btn-block">
            Вычесть
        </button>
    </div>

    <div class="col-sm mt-1">
        <button type="submit" name="operation" value="multiplication" id="multiplication" class="btn btn-outline-secondary btn-block">
            Умножить
        </button>
    </div>

    <div class="col-sm mt-1">
        <button type="submit" name="operation" value="division" id="division" class="btn btn-outline-secondary btn-block">
            Делить
        </button>
    </div>
</div>

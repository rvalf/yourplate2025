<div class="modal fade" id="mealModal{{ $meal->meal_id }}" tabindex="-1" aria-labelledby="mealModalLabel{{ $meal->meal_id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mealModalLabel{{ $meal->meal_id }}">{{ $meal->meal_name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Ingredients:</strong> {{ $meal->meal_material }}</p>
                <p><strong>Steps:</strong> {{ $meal->meal_step }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h2 class="fw-bold mb-0">
            <i class="bi bi-fuel-pump me-1"></i> Gestion du carburant
        </h2>
        <small class="text-muted">
            Ajouter un nouveau prix du carburant
        </small>
    </div>

    <a href="/" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Retour à l’accueil
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-plus-circle me-1"></i> Nouveau prix du carburant
    </div>

    <div class="card-body">
        <form action="/carburant/modifier" method="post" class="row g-3">

            <div class="col-md-6">
                <label class="form-label">Type de carburant</label>
                <select name="id_carburant" class="form-select" required>
                    <option value="">-- Choisir --</option>
                    <option value="1">Essence</option>
                    <option value="2">Gasoil</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Prix (Ar / litre)</label>
                <input type="number" name="prix" class="form-control" step="10" min="0" placeholder="Ex : 5 200" required>
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 mt-2">
                <a href="/" class="btn btn-outline-secondary">
                    <i class="bi bi-x-circle"></i> Annuler
                </a>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Enregistrer
                </button>
            </div>

        </form>
    </div>
</div>

<?php

?>

<div class="modal fade" id="editHotelModal_<?= (int)$hotel['id'] ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="../secondary/hotels_crud.php" enctype="multipart/form-data">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="hotel_id" value="<?= (int)$hotel['id'] ?>">
        <input type="hidden" name="redirect" value="../listing.php">

        <div class="modal-header">
          <h5 class="modal-title">Upraviť hotel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavrieť"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Názov hotela</label>
              <input class="form-control" type="text" name="title" value="<?= htmlspecialchars((string)$hotel['title']) ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Typ hotela</label>
              <select class="form-select" name="category" required>
                <?php
                $cats = ['luxury','boutique','business','resort','family'];
                foreach ($cats as $c):
                  $selected = ($hotel['category'] ?? '') === $c ? 'selected' : '';
                ?>
                  <option value="<?= $c ?>" <?= $selected ?>><?= ucfirst($c) ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Hodnotenie (hviezdičky)</label>
              <select class="form-select" name="stars">
                <?php
                for ($i = 5; $i >= 1; $i--):
                  $selected = ((int)($hotel['stars'] ?? 0)) === $i ? 'selected' : '';
                ?>
                  <option value="<?= $i ?>" <?= $selected ?>><?= $i ?> hviezdičiek</option>
                <?php endfor; ?>
                <option value="" <?= empty($hotel['stars']) ? 'selected' : '' ?>>Počet hviezdičiek</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Mesto</label>
              <input class="form-control" type="text" name="city" value="<?= htmlspecialchars((string)$hotel['city']) ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Cena / noc</label>
              <input class="form-control" type="number" name="price" value="<?= htmlspecialchars((string)$hotel['price']) ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Adresa</label>
              <input class="form-control" type="text" name="location" value="<?= htmlspecialchars((string)$hotel['location']) ?>" required>
            </div>

            <div class="col-md-3">
              <label class="form-label">Check-in</label>
              <input class="form-control" type="text" name="checkin" value="<?= htmlspecialchars((string)($hotel['checkin'] ?? '')) ?>">
            </div>

            <div class="col-md-3">
              <label class="form-label">Check-out</label>
              <input class="form-control" type="text" name="checkout" value="<?= htmlspecialchars((string)($hotel['checkout'] ?? '')) ?>">
            </div>

            <div class="col-md-4">
              <label class="form-label">Počet izieb</label>
              <input class="form-control" type="number" name="rooms" value="<?= htmlspecialchars((string)($hotel['rooms'] ?? '')) ?>">
            </div>

            <div class="col-md-8">
              <label class="form-label">Typy izieb</label>
              <input class="form-control" type="text" name="room_types" value="<?= htmlspecialchars((string)($hotel['room_types'] ?? '')) ?>">
            </div>

            <div class="col-12">
              <label class="form-label">Popis hotela</label>
              <textarea class="form-control" name="description" rows="4" required><?= htmlspecialchars((string)$hotel['description']) ?></textarea>
            </div>

            <div class="col-12">
              <label class="form-label">Hlavné služby (amenities)</label>
              <div class="row gy-2">
                <?php
                $selectedAmenities = $hotel['amenity_names'] ?? [];
                foreach ($amenities as $a):
                  $checked = in_array($a['name'], $selectedAmenities, true) ? 'checked' : '';
                ?>
                  <div class="col-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="amen_<?= (int)$hotel['id'] ?>_<?= (int)$a['id'] ?>" name="amenities[]" value="<?= htmlspecialchars($a['name']) ?>" <?= $checked ?> >
                      <label class="form-check-label" for="amen_<?= (int)$hotel['id'] ?>_<?= (int)$a['id'] ?>"><?= htmlspecialchars($a['name']) ?></label>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">Kontaktné údaje</label>
              <div class="row gy-3">
                <div class="col-md-6">
                  <input class="form-control" type="text" name="contact_name" placeholder="Meno" value="<?= htmlspecialchars((string)($hotel['contact_name'] ?? '')) ?>" required>
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="email" name="contact_email" placeholder="Email" value="<?= htmlspecialchars((string)($hotel['contact_email'] ?? '')) ?>" required>
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="text" name="contact_phone" placeholder="Telefón" value="<?= htmlspecialchars((string)($hotel['contact_phone'] ?? '')) ?>">
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="url" name="website" placeholder="https://" value="<?= htmlspecialchars((string)($hotel['website'] ?? '')) ?>">
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">Nové fotky (voliteľné)</label>
              <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Zrušiť</button>
          <button type="submit" class="btn btn-primary">Uložiť</button>
        </div>
      </form>
    </div>
  </div>
</div>


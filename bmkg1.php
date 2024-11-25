<?php
if ($data->gempa->Magnitude > 5) {
    echo "<div style='background-color: yellow; padding: 10px; border-radius: 5px;'>
          <strong>PERINGATAN:</strong> Gempabumi dengan Magnitudo lebih dari 5.0! Harap waspada!
        </div><br>";
}

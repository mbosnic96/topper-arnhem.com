<?php
                    $rating = 5.0;
                    echo '<span class="fw-bold me-3 stars text-muted fst-italic">' . $rating . '.00'. '</span>';
                    for ($i = 1; $i <= 5; $i++) {
                    echo '<i class="fas fa-star text-warning stars"></i>';
                }
                ?>
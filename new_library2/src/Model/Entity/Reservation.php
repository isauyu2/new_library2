<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $bookstate_id
 * @property int $book_id
 * @property \Cake\I18n\FrozenTime $date
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Bookstate $bookstate
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\Rental[] $rentals
 */
class Reservation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'bookstate_id' => true,
        'book_id' => true,
        'date' => true,
        'user' => true,
        'bookstate' => true,
        'book' => true,
        'rentals' => true
    ];
}

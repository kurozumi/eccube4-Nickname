<?php

namespace Plugin\Nickname\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait {

    /**
     * @ORM\Column(name="nickname", type="string", length=255, nullable=true)
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *  options={
     *    "required": true,
     *    "label": "ニックネーム"
     *  }
     * )
     * @Assert\NotBlank(message="ニックネームを入力してください")
     */
    private $nickname;

    public function getNickname() {
        return $this->nickname;
    }

    public function setNickname($nickname) {
        $this->nickname = $nickname;

        return $this;
    }
}

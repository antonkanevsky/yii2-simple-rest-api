<?php

use yii\db\Migration;

/**
 * Создание пользователя API.
 */
class m180917_193755_insert_api_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->insert('user', [
            'username' => 'api_user',
            'status' => 10,
            'auth_key' => 'HP187Mvq7Mmm3CTU80dLkGmni_FUH_lR',
            'password_hash' => '$2y$13$5rqJHGe3vbybbSeXbeYAKeXjqgTPm5hMqMBFAnvvmG26Ya8NmZISK',
            'password_reset_token' => null,
            'access_token' => 'SlAV32hkKG',
            'created_at' => '1536962521',
            'updated_at' => '1536962521',
            'email' => 'rest@api.com',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->delete('user', [
            'username' => 'api_user'
        ]);
    }

}

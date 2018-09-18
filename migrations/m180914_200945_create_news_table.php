<?php

use yii\db\Migration;

/**
 * Создание таблицы для сущности "Новость".
 */
class m180914_200945_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey()->comment('Идентификатор'),
            'title' => $this->string()->notNull()->comment('Заголовок'),
            'seo' => $this->string(64)->comment('SEO URL'),
            'author_id' => $this->integer()->notNull()->comment('Автор'),
            'html' => $this->text()->notNull()->comment('Содержимое'),
            'status' => $this->smallInteger()->notNull()->comment('Статус'),
            'created_at' => $this->integer()->notNull()->comment('Дата создания'),
            'updated_at' => $this->integer()->notNull()->comment('Дата обновления'),
            'date_published' => $this->integer()->comment('Дата публикации')
        ]);

        $this->createIndex(
            'news_author_id_idx',
            'news',
            'author_id'
        );

        $this->addForeignKey(
            'news_author_id_fk',
            'news',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('news_author_id_fk', 'news');
        $this->dropIndex('news_author_id_idx', 'news');
        $this->dropTable('news');
    }
}

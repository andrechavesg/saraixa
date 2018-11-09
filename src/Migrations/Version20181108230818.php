<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181108230818 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hora_lancada DROP FOREIGN KEY FK_511BAA9A642FEB76');
        $this->addSql('ALTER TABLE funcionario DROP FOREIGN KEY FK_7510A3CF43B58490');
        $this->addSql('ALTER TABLE hora_lancada DROP FOREIGN KEY FK_511BAA9A43B58490');
        $this->addSql('CREATE TABLE livro (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, autor VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE funcionario');
        $this->addSql('DROP TABLE hora_lancada');
        $this->addSql('DROP TABLE projeto');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE funcionario (id INT AUTO_INCREMENT NOT NULL, projeto_id INT DEFAULT NULL, data_de_entrada DATETIME NOT NULL, data_de_nascimento DATETIME NOT NULL, nome VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_7510A3CF43B58490 (projeto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hora_lancada (id INT AUTO_INCREMENT NOT NULL, funcionario_id INT DEFAULT NULL, projeto_id INT DEFAULT NULL, descricao VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, quantidade DOUBLE PRECISION NOT NULL, INDEX IDX_511BAA9A43B58490 (projeto_id), INDEX IDX_511BAA9A642FEB76 (funcionario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projeto (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE funcionario ADD CONSTRAINT FK_7510A3CF43B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE hora_lancada ADD CONSTRAINT FK_511BAA9A43B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE hora_lancada ADD CONSTRAINT FK_511BAA9A642FEB76 FOREIGN KEY (funcionario_id) REFERENCES funcionario (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE livro');
    }
}

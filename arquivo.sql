-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tcc-aura
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `matricula_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_matricula_id_foreign` (`matricula_id`),
  CONSTRAINT `answers_matricula_id_foreign` FOREIGN KEY (`matricula_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,3,'2021-06-07 00:06:15','2021-06-07 00:06:15');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers_questions`
--

DROP TABLE IF EXISTS `answers_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `answer_id` bigint(20) unsigned NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_questions_answer_id_foreign` (`answer_id`),
  KEY `answers_questions_question_id_foreign` (`question_id`),
  CONSTRAINT `answers_questions_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `answers_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_questions`
--

LOCK TABLES `answers_questions` WRITE;
/*!40000 ALTER TABLE `answers_questions` DISABLE KEYS */;
INSERT INTO `answers_questions` VALUES (1,1,6,NULL,NULL),(2,1,5,NULL,NULL);
/*!40000 ALTER TABLE `answers_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classifications`
--

DROP TABLE IF EXISTS `classifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classifications`
--

LOCK TABLES `classifications` WRITE;
/*!40000 ALTER TABLE `classifications` DISABLE KEYS */;
INSERT INTO `classifications` VALUES (1,'Disciplinas ','2021-06-07 00:05:36','2021-06-07 00:05:36'),(2,'Metodologia de Ensino (Aura)','2021-06-07 00:05:36','2021-06-07 00:05:36'),(3,'Curso ADS','2021-06-07 00:05:36','2021-06-07 00:05:36'),(4,'Professores','2021-06-07 00:05:37','2021-06-07 00:05:37'),(5,'Coordenação do Curso ','2021-06-07 00:05:37','2021-06-07 00:05:37'),(6,'Cursos e Atividades de Extensão','2021-06-07 00:05:37','2021-06-07 00:05:37'),(7,'Intercâmbio','2021-06-07 00:05:37','2021-06-07 00:05:37'),(8,'Estágio, TCC e Projeto  Integrador','2021-06-07 00:05:37','2021-06-07 00:05:37'),(9,'Infraestrutura','2021-06-07 00:05:37','2021-06-07 00:05:37');
/*!40000 ALTER TABLE `classifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (81,'2014_10_12_000000_create_users_table',1),(82,'2014_10_12_100000_create_password_resets_table',1),(83,'2019_08_19_000000_create_failed_jobs_table',1),(84,'2019_12_14_000001_create_personal_access_tokens_table',1),(85,'2021_05_30_011511_create_permission_tables',1),(86,'2021_05_31_225723_create_modelos_table',1),(87,'2021_05_31_230651_create_classifications_table',1),(88,'2021_05_31_230834_create_questions_table',1),(89,'2021_05_31_231641_create_answers_table',1),(90,'2021_06_06_020008_create_answers_questions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (3,'App\\Models\\User',1),(3,'App\\Models\\User',2),(2,'App\\Models\\User',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos`
--

DROP TABLE IF EXISTS `modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` VALUES (1,'Múltipla Escolha',6,'2021-06-07 00:05:37','2021-06-07 00:05:37'),(2,'NPS',10,'2021-06-07 00:05:37','2021-06-07 00:05:37');
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'users','web','2021-06-07 00:05:35','2021-06-07 00:05:35'),(2,'clients','web','2021-06-07 00:05:35','2021-06-07 00:05:35'),(3,'admins','web','2021-06-07 00:05:35','2021-06-07 00:05:35'),(4,'classifications','web','2021-06-07 00:05:35','2021-06-07 00:05:35');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_classification` bigint(20) unsigned NOT NULL,
  `id_modelo` bigint(20) unsigned NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_id_classification_foreign` (`id_classification`),
  KEY `questions_id_modelo_foreign` (`id_modelo`),
  CONSTRAINT `questions_id_classification_foreign` FOREIGN KEY (`id_classification`) REFERENCES `classifications` (`id`) ON DELETE CASCADE,
  CONSTRAINT `questions_id_modelo_foreign` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,1,'As disciplinas cursadas contribuíram para sua formação integral, como cidadão e profissional ','2021-06-07 00:05:37','2021-06-07 00:05:37'),(2,1,1,'Os conteúdos abordados nas disciplinas do curso favoreceram sua atuação em estágios ou em atividades de iniciação profissional. ','2021-06-07 00:05:37','2021-06-07 00:05:37'),(3,1,1,'Os planos de ensino apresentados pelos professores contribuíram para o desenvolvimento das atividades acadêmicas e para seus estudos.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(4,1,1,'As referências bibliográficas indicadas pelos professores nos planos de ensino contribuíram para seus estudos e aprendizagens.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(5,1,1,'As avaliações da aprendizagem realizadas durante o curso foram compatíveis com os conteúdos ou temas trabalhados pelos professores.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(6,1,1,'A biblioteca dispôs das referências bibliográficas que os estudantes necessitaram. ','2021-06-07 00:05:37','2021-06-07 00:05:37'),(7,1,1,'A instituição contou com biblioteca virtual ou conferiu acesso a obras disponíveis em acervos virtuais.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(8,2,1,'As metodologias de ensino utilizadas no curso desafiaram você a aprofundar conhecimentos e desenvolver competências reflexivas e críticas. ','2021-06-07 00:05:37','2021-06-07 00:05:37'),(9,3,1,'O curso propiciou experiências de aprendizagem inovadoras','2021-06-07 00:05:37','2021-06-07 00:05:37'),(10,3,1,'O curso contribuiu para o desenvolvimento da sua consciência ética para o exercício profissional','2021-06-07 00:05:37','2021-06-07 00:05:37'),(11,3,1,'No curso você teve oportunidade de aprender a trabalhar em equipe. ','2021-06-07 00:05:37','2021-06-07 00:05:37'),(12,3,1,'O curso promoveu o desenvolvimento da sua capacidade de pensar criticamente, analisar e refletir sobre soluções para problemas da sociedade.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(13,3,1,'O curso contribuiu para você ampliar sua capacidade de comunicação nas formas oral e escrita.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(14,3,1,'O curso contribuiu para o desenvolvimento da sua capacidade de aprender e atualizar-se permanentemente.','2021-06-07 00:05:37','2021-06-07 00:05:37'),(15,3,1,'O curso exigiu de você organização e dedicação frequente aos estudos.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(16,3,1,'O curso ofereceu condições para os estudantes participarem de eventos internos e/ou externos à instituição.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(17,3,1,'O curso favoreceu a articulação do conhecimento teórico com atividades práticas.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(18,3,1,'O curso propiciou acesso a conhecimentos atualizados e/ou contemporâneos em sua área de formação.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(19,3,1,'O curso disponibilizou monitores ou tutores para auxiliar os estudantes.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(20,3,1,'Os estudantes participaram de avaliações periódicas do curso (disciplinas, atuação dos professores, infraestrutura).','2021-06-07 00:05:38','2021-06-07 00:05:38'),(21,4,1,'As relações professor-aluno ao longo do curso estimularam você a estudar e aprender.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(22,4,1,'Os professores apresentaram disponibilidade para atender os estudantes fora do horário das aulas.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(23,4,1,'Os professores demonstraram domínio dos conteúdos abordados nas disciplinas.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(24,4,1,'Os professores utilizaram tecnologias da informação e comunicação (TICs) como estratégia de ensino (projetor multimídia, laboratório de informática, ambiente virtual de aprendizagem).','2021-06-07 00:05:38','2021-06-07 00:05:38'),(25,5,2,'A coordenação do curso esteve disponível para orientação acadêmica dos estudantes. ','2021-06-07 00:05:38','2021-06-07 00:05:38'),(26,6,2,'Foram oferecidas oportunidades para os estudantes superarem dificuldades relacionadas ao processo de formação.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(27,6,2,'Foram oferecidas oportunidades para os estudantes participarem de programas, projetos ou atividades de extensão universitária.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(28,6,2,'Foram oferecidas oportunidades para os estudantes participarem de projetos de iniciação científica e de atividades que estimularam a investigação acadêmica.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(29,6,2,'A instituição ofereceu oportunidades para os estudantes atuarem como representantes em órgãos colegiados.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(30,6,2,'As atividades práticas foram suficientes para relacionar os conteúdos do curso com a prática, contribuindo para sua formação profissional.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(31,6,2,'A instituição promoveu atividades de cultura, de lazer e de interação social.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(32,6,2,'As atividades acadêmicas desenvolvidas dentro e fora da sala de aula possibilitaram reflexão, convivência e respeito à diversidade.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(33,7,2,'Foram oferecidas oportunidades para os estudantes realizarem intercâmbios e/ou estágios no país.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(34,7,2,'Foram oferecidas oportunidades para os estudantes realizarem intercâmbios e/ou estágios fora do país.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(35,8,2,'O estágio supervisionado proporcionou experiências diversificadas para a sua formação.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(36,8,2,'As atividades realizadas durante seu trabalho de conclusão de curso contribuíram para qualificar sua formação profissional.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(37,9,2,'A instituição dispôs de quantidade suficiente de funcionários para o apoio administrativo e acadêmico.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(38,9,2,'As condições de infraestrutura das salas de aula foram adequadas.','2021-06-07 00:05:38','2021-06-07 00:05:38'),(39,9,2,'Os equipamentos e materiais disponíveis para as aulas práticas foram adequados para a quantidade de estudantes.','2021-06-07 00:05:39','2021-06-07 00:05:39'),(40,9,2,' Os ambientes e equipamentos destinados às aulas práticas foram adequados ao curso.','2021-06-07 00:05:39','2021-06-07 00:05:39'),(41,9,2,'A instituição dispôs de refeitório, cantina e banheiros em condições adequadas que atenderam as necessidades dos seus usuários.','2021-06-07 00:05:39','2021-06-07 00:05:39');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,2),(2,2),(3,2),(4,2),(1,3),(2,3),(3,3),(4,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'user','web','2021-06-07 00:05:35','2021-06-07 00:05:35'),(2,'client','web','2021-06-07 00:05:35','2021-06-07 00:05:35'),(3,'admin','web','2021-06-07 00:05:35','2021-06-07 00:05:35');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `matricula` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `periodo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'client' COMMENT 'client, admin.',
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Webmaster Alini','alini.canedo@gmail.com',NULL,'','','admin','$2y$10$vR/ptQ65gJcvIvFhRQrWmOBZlt0ptVMTwhj9FBtB3.uRJKrc1JMWG',NULL,'2021-06-07 00:05:36','2021-06-07 00:05:36'),(2,'Webmaster Teste','alini.teste@gmail.com',NULL,'','','admin','$2y$10$7zaHTL6Zm2LI7XEQwy2IXeD1uyEkd1tvK2r2ajFamPbH7LeZMn5Gy',NULL,'2021-06-07 00:05:36','2021-06-07 00:05:36'),(3,'Aluno de Testes','aluno@gmail.com',NULL,'','','client','$2y$10$9Swxd1ERYFrrCnwhg47VHer1qhycPK2B37NGrKFh2DiaDwyscVa2O',NULL,'2021-06-07 00:05:36','2021-06-07 00:05:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-06 20:18:45

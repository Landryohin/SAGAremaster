--
-- PostgreSQL database dump
--

-- Dumped from database version 15.4
-- Dumped by pg_dump version 15.4

-- Started on 2025-05-11 17:45:30

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 237 (class 1255 OID 16638)
-- Name: notify_messenger_messages(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;


ALTER FUNCTION public.notify_messenger_messages() OWNER TO winkin;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 214 (class 1259 OID 16639)
-- Name: affectations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.affectations (
    id integer NOT NULL,
    document_id integer NOT NULL,
    date_affectation_at date,
    status boolean,
    envoyeur character varying(255),
    receveur character varying(255),
    owner_id integer,
    agent_id integer,
    poste_owner_id integer
);


ALTER TABLE public.affectations OWNER TO winkin;

--
-- TOC entry 215 (class 1259 OID 16644)
-- Name: affectations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.affectations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.affectations_id_seq OWNER TO winkin;

--
-- TOC entry 216 (class 1259 OID 16645)
-- Name: directions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.directions (
    id integer NOT NULL,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    directeur_id integer,
    status boolean NOT NULL,
    owner_id integer
);


ALTER TABLE public.directions OWNER TO winkin;

--
-- TOC entry 217 (class 1259 OID 16648)
-- Name: directions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.directions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.directions_id_seq OWNER TO winkin;

--
-- TOC entry 218 (class 1259 OID 16649)
-- Name: divisions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.divisions (
    id integer NOT NULL,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    chef_id integer,
    service_id integer,
    status boolean NOT NULL,
    owner_id integer
);


ALTER TABLE public.divisions OWNER TO winkin;

--
-- TOC entry 219 (class 1259 OID 16652)
-- Name: divisions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.divisions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.divisions_id_seq OWNER TO winkin;

--
-- TOC entry 220 (class 1259 OID 16653)
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO winkin;

--
-- TOC entry 221 (class 1259 OID 16657)
-- Name: documents; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.documents (
    id integer NOT NULL,
    objet text NOT NULL,
    chemin character varying(255) NOT NULL,
    structure character varying(255) NOT NULL,
    mouvement character varying(50) NOT NULL,
    document_at timestamp(0) without time zone NOT NULL,
    owner_id integer,
    type_document_id integer,
    status boolean NOT NULL,
    reference character varying(255) NOT NULL,
    numero_enregistrement integer,
    date_arrivee date NOT NULL,
    reponse_id integer,
    poste character varying(15) NOT NULL,
    niveau character varying(15) NOT NULL,
    date_document date,
    initiateur character varying(25) DEFAULT NULL::character varying,
    observation text,
    poste_owner_id integer
);


ALTER TABLE public.documents OWNER TO winkin;

--
-- TOC entry 3484 (class 0 OID 0)
-- Dependencies: 221
-- Name: COLUMN documents.document_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.documents.document_at IS '(DC2Type:datetime_immutable)';


--
-- TOC entry 222 (class 1259 OID 16663)
-- Name: documents_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.documents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.documents_id_seq OWNER TO winkin;

--
-- TOC entry 223 (class 1259 OID 16664)
-- Name: messenger_messages; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.messenger_messages (
    id bigint NOT NULL,
    body text NOT NULL,
    headers text NOT NULL,
    queue_name character varying(190) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    available_at timestamp(0) without time zone NOT NULL,
    delivered_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE public.messenger_messages OWNER TO winkin;

--
-- TOC entry 224 (class 1259 OID 16670)
-- Name: messenger_messages_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.messenger_messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.messenger_messages_id_seq OWNER TO winkin;

--
-- TOC entry 3485 (class 0 OID 0)
-- Dependencies: 224
-- Name: messenger_messages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.messenger_messages_id_seq OWNED BY public.messenger_messages.id;


--
-- TOC entry 225 (class 1259 OID 16671)
-- Name: postes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.postes (
    id integer NOT NULL,
    agent_id integer NOT NULL,
    owner_id integer NOT NULL,
    niveau character varying(25) NOT NULL,
    fonction character varying(15) NOT NULL,
    date_deb date NOT NULL,
    date_fin date,
    status boolean NOT NULL,
    poste_at date NOT NULL,
    type character varying(25) DEFAULT NULL::character varying
);


ALTER TABLE public.postes OWNER TO winkin;

--
-- TOC entry 226 (class 1259 OID 16675)
-- Name: postes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.postes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.postes_id_seq OWNER TO winkin;

--
-- TOC entry 227 (class 1259 OID 16676)
-- Name: provenances; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.provenances (
    id integer NOT NULL,
    document_id integer NOT NULL,
    structure character varying(255) NOT NULL,
    numero integer,
    date_enregistrement date NOT NULL
);


ALTER TABLE public.provenances OWNER TO winkin;

--
-- TOC entry 228 (class 1259 OID 16679)
-- Name: provenances_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.provenances_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.provenances_id_seq OWNER TO winkin;

--
-- TOC entry 229 (class 1259 OID 16680)
-- Name: secretariats; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.secretariats (
    id integer NOT NULL,
    direction_id integer,
    secretaire character varying(10) NOT NULL,
    type character varying(25) NOT NULL,
    owner_id integer,
    status boolean
);


ALTER TABLE public.secretariats OWNER TO winkin;

--
-- TOC entry 230 (class 1259 OID 16683)
-- Name: secretariats_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.secretariats_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.secretariats_id_seq OWNER TO winkin;

--
-- TOC entry 231 (class 1259 OID 16684)
-- Name: services; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.services (
    id integer NOT NULL,
    direction_id integer,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean NOT NULL,
    chef_id integer,
    owner_id integer
);


ALTER TABLE public.services OWNER TO winkin;

--
-- TOC entry 232 (class 1259 OID 16687)
-- Name: services_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.services_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.services_id_seq OWNER TO winkin;

--
-- TOC entry 233 (class 1259 OID 16688)
-- Name: type_documents; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.type_documents (
    id integer NOT NULL,
    code character varying(25) NOT NULL,
    libelle character varying(255) NOT NULL,
    owner_id integer,
    direction_id integer,
    status boolean
);


ALTER TABLE public.type_documents OWNER TO winkin;

--
-- TOC entry 234 (class 1259 OID 16691)
-- Name: type_documents_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.type_documents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.type_documents_id_seq OWNER TO winkin;

--
-- TOC entry 235 (class 1259 OID 16692)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    email character varying(180) NOT NULL,
    roles json NOT NULL,
    password character varying(255) NOT NULL,
    niveau character varying(15) NOT NULL,
    zone character varying(15) NOT NULL,
    nom character varying(80) NOT NULL,
    prenom character varying(100) NOT NULL,
    status boolean NOT NULL,
    owner_id integer
);


ALTER TABLE public.users OWNER TO winkin;

--
-- TOC entry 236 (class 1259 OID 16697)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO winkin;

--
-- TOC entry 3230 (class 2604 OID 16698)
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- TOC entry 3456 (class 0 OID 16639)
-- Dependencies: 214
-- Data for Name: affectations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.affectations (id, document_id, date_affectation_at, status, envoyeur, receveur, owner_id, agent_id, poste_owner_id) FROM stdin;
30	29	2023-04-05	t	DPIB	SBAC	46	\N	4
26	28	2023-03-22	t	DGML	DM	38	\N	20
25	28	2023-03-22	t	DGML	DGR	38	\N	20
24	8	2023-04-03	t	DGML	DGCA	38	\N	20
29	29	2023-04-04	t	DGML	DPIB	0	\N	46
32	9	2023-04-05	t	DGML	DPIB	28	\N	40
27	17	2023-04-03	t	DGML	ASS	0	\N	46
36	18	2023-05-30	t	DGR	\N	\N	\N	7
33	18	2023-05-17	t	DGML	DI	0	50	46
28	29	2023-05-25	t	DGML	DI	0	50	46
35	9	2023-05-25	t	DGR	DI	\N	50	7
34	46	2023-05-30	t	DGML	DI	\N	50	45
37	9	2023-05-30	t	DGR	DI	\N	50	7
38	28	2023-05-31	t	DGR	DI	\N	50	7
39	28	2023-05-31	f	DGML	SCM	\N	\N	45
40	54	2023-06-07	f	DGML	SET	\N	\N	45
41	55	2023-06-07	f	DGML	DM	\N	\N	20
42	57	2024-07-14	t	DGML	ASS	\N	\N	45
44	57	2024-07-14	f	DGML	DM	\N	\N	45
45	60	2024-08-16	f	DGML	ASS	\N	\N	45
\.


--
-- TOC entry 3458 (class 0 OID 16645)
-- Dependencies: 216
-- Data for Name: directions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.directions (id, code, libelle, directeur_id, status, owner_id) FROM stdin;
4	DM	Direction du Matériel	47	t	0
3	DGR	Direction de la Gestion des Ressources	52	t	0
2	DGCA	Direction du Garage Central Administratif	42	t	0
1	DGML	Direction Générale du Matériel et de la Logistique	45	t	0
6	ASS	Assistant DGML	50	t	0
7	goho	ghojoi	\N	f	0
5	DPIB	Direction du Patrimoine Immobilier Bâti	46	t	0
8	DSA	DSA	\N	t	0
\.


--
-- TOC entry 3460 (class 0 OID 16649)
-- Dependencies: 218
-- Data for Name: divisions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.divisions (id, code, libelle, chef_id, service_id, status, owner_id) FROM stdin;
10	DDA	Division de la Documentation et des Archives	\N	13	t	0
3	DBA	Division des Baux Administratifs	\N	7	t	0
4	DBE	Division de la gestion des Bâtiments de l'Etat	\N	7	t	0
6	DCOCM	Division de la Centralisation des Opérations des Comptables des Matières	\N	9	t	0
7	DCP	Division des Commandes Publiques et du recouvrement	\N	8	t	0
8	DCVGM	Division du Contôle et Vérification de la Gestion des Matières 	\N	9	t	0
15	DGP	Division de la Gestion du Personnel	\N	6	t	0
23	DPEB	Division de la Préparation et du suivi de l'Exécution du Budget	\N	8	t	0
30	DRU	Division des Relations avec les Usagers	\N	6	t	0
37	DRCM	Division des Réformes de la Comptabilité des Matières 	\N	10	t	0
9	DD	Division des Dépenses de bâtiments	10	8	t	0
14	DF	Division des formations	14	6	t	0
16	DI	Division de l'Informatique	15	13	t	0
19	DMat	Division du Matériel	18	13	t	0
25	DPSE	Division de la Prospection des Sites de l'Etat	23	17	t	0
27	DRBA	Division des Réfections des Bâtiments Administratifs	25	18	t	0
28	DRBM	Division de la Réforme des Biens Meubles 	26	12	t	0
29	DRL	Division des Réparations Locatives	27	18	t	0
38	DSC	Division Suivi et Carrière	29	6	t	0
32	DSTCM	Division du Suivi de la Tenue de la Comptabilité des Matières 	30	10	t	0
11	DDRA	Division des Dépenses de Réparations Automobiles	\N	8	t	0
13	DES	Division des Etudes et de la Statistique	16	13	t	0
17	DIAT	Division des Inventaires et d'Appui Technique	29	10	t	0
18	DLACE	Division des Logements Administratifs et des Contrats d'Entretien	6	7	t	0
31	SA	Division du Secrétariat Administratif	28	6	t	0
35	S/DM	Secrétariat de la Direction du Matériel	7	3	t	0
36	S/DPIB	Secrétariat de la Direction du Patrimoine Immobilier Bâti	9	4	t	0
5	DC	Division du Contentieux	\N	17	t	0
34	S/DGR	Secrétariat de la Direction de la Gestion des Ressources	41	2	t	0
33	S/DGCA	Secrétariat de la Direction du Garage Central Administratif	51	1	t	0
12	DEC	Division des Etudes et du Contentieux	12	11	t	0
20	DMVPC	Division de la Maintenance des Véhicules du Parc Central 	19	14	t	0
21	DMVPE	Division de la Maintenance des Véhicules du Parc Externe	20	14	t	0
26	DR	Division des Réformes	24	14	t	0
24	DPEVL	Division du Parc Externe et des Véhicules Loués	22	15	t	0
2	DAEM	Division des Autres Equipements Motorisés	\N	15	t	0
22	DPCAR	Division du Parc Central Automobile et des Réquisitions 	21	15	t	0
1	DABM	Division des Acquisitions des Biens Meubles	\N	12	t	0
\.


--
-- TOC entry 3462 (class 0 OID 16653)
-- Dependencies: 220
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20221007115256	2022-11-19 20:24:05	74
DoctrineMigrations\\Version20221007123901	2022-11-19 20:24:05	6
DoctrineMigrations\\Version20221025095722	2022-11-19 20:24:05	20
DoctrineMigrations\\Version20221025152425	2022-11-19 20:24:05	1
DoctrineMigrations\\Version20221026090029	2022-11-19 20:24:05	0
DoctrineMigrations\\Version20221027155542	2022-11-19 20:24:05	0
DoctrineMigrations\\Version20221028140057	2022-11-19 20:24:05	6
DoctrineMigrations\\Version20221028145818	2022-11-19 20:24:05	0
DoctrineMigrations\\Version20221028151320	2022-11-19 20:24:05	0
DoctrineMigrations\\Version20221028154539	2022-11-19 20:24:05	5
DoctrineMigrations\\Version20221107133606	2022-11-19 20:24:05	13
DoctrineMigrations\\Version20221110175246	2022-11-19 20:24:05	1
DoctrineMigrations\\Version20221112065949	2022-11-19 20:24:05	3
DoctrineMigrations\\Version20221113111314	2022-11-19 20:24:05	2
DoctrineMigrations\\Version20221212145339	2022-12-19 09:58:33	84
DoctrineMigrations\\Version20221212161551	2022-12-19 09:58:33	3
DoctrineMigrations\\Version20221213162238	2022-12-19 09:58:33	5
DoctrineMigrations\\Version20221213170937	2022-12-19 09:58:33	1
DoctrineMigrations\\Version20221219090228	2022-12-19 10:02:38	120
DoctrineMigrations\\Version20230103210210	2023-01-03 22:02:17	88
DoctrineMigrations\\Version20230109142117	2023-01-09 15:21:29	178
DoctrineMigrations\\Version20230128165929	2023-01-28 17:59:40	197
DoctrineMigrations\\Version20230305182800	2023-03-12 19:27:20	40
DoctrineMigrations\\Version20230312173144	2023-03-12 19:41:57	44
DoctrineMigrations\\Version20230317102238	2023-03-19 23:47:53	92
DoctrineMigrations\\Version20230329104447	2023-03-29 12:45:04	117
DoctrineMigrations\\Version20230329104614	2023-03-29 12:46:19	8
DoctrineMigrations\\Version20230408220822	2023-04-09 00:08:43	694
DoctrineMigrations\\Version20230408221033	2023-04-09 00:10:38	8
DoctrineMigrations\\Version20230409235438	2023-04-10 01:54:44	109
DoctrineMigrations\\Version20230410192429	2023-04-10 21:24:38	135
DoctrineMigrations\\Version20230411100737	2023-04-11 12:07:44	22
DoctrineMigrations\\Version20230412145942	2023-04-12 17:00:05	143
DoctrineMigrations\\Version20230413075241	2023-04-13 09:52:49	233
DoctrineMigrations\\Version20230413134549	2023-04-13 15:45:57	69
DoctrineMigrations\\Version20230424145231	2023-04-24 16:52:44	182
DoctrineMigrations\\Version20230428104330	2023-04-28 12:43:44	1548
DoctrineMigrations\\Version20230517090935	2023-05-17 11:11:36	272
DoctrineMigrations\\Version20230517150634	2023-05-17 17:06:46	255
DoctrineMigrations\\Version20230517162749	2023-05-17 18:27:54	6
DoctrineMigrations\\Version20230517192412	2023-05-17 21:24:18	5
DoctrineMigrations\\Version20230517192732	2023-05-17 21:27:37	27
DoctrineMigrations\\Version20230517193056	2023-05-17 21:31:02	6
\.


--
-- TOC entry 3463 (class 0 OID 16657)
-- Dependencies: 221
-- Data for Name: documents; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.documents (id, objet, chemin, structure, mouvement, document_at, owner_id, type_document_id, status, reference, numero_enregistrement, date_arrivee, reponse_id, poste, niveau, date_document, initiateur, observation, poste_owner_id) FROM stdin;
19	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0a3dd5469.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 20:49:17	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
23	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0c4eadc09.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 20:58:06	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
13	Transmission des pièces relatives à la demande de certificat de non attribution de véhicule administratif au profit de Monsieur KPOTON Mahugnon Fréjus	DAF-HAAC-N00003-DU-03-01-2023-64103d835f18f.pdf	DAF HAAC	ARRIVEE DIRECTE	2023-03-14 10:25:23	38	61	t	N°0002/MEF/DC/SGM/DGML/DM/SICM/DIAT/SP	3	2023-01-03	\N	SP	CONFIDENTIEL	2023-01-03	\N	\N	20
46	kulyjtrdyufgitrsdgjhhfgnjunb	EDT-M2-IRT-17-AVRIL-2023-646e1948780b1.pdf	sdrtfygikj	ARRIVEE DIRECTE	2023-05-24 16:03:50	\N	49	t	HDMNONPNZONENNNLNN	125	2023-05-24	\N	DGML	RESTREINT	2023-05-10	\N	\N	45
45	TestAgent	638083dd2b9e8-6465326840bdc.pdf	DGML	INTERNE	2023-05-17 22:00:39	\N	40	t	TestAgent	\N	2023-05-17	\N	DGML	RESTREINT	2023-05-17	\N	\N	49
47	TestAgent	EDT-M2-IRT-17-AVRIL-2023-647713c163161.pdf	DGML	DEPART	2023-05-31 11:12:42	\N	40	t	TestAgentRéponse	484	2023-05-31	45	SP	CONFIDENTIEL	2023-05-31	DRBM	\N	20
20	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0a7796a88.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 20:50:15	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
11	Aménagement du siège de l'ex CIM Borgou-Alibori au profit de ka délégation départementale du Borgou	CMA-BENIN-N0003-DU-04-01-2023-DGML-N00006-DU-04-01-2023-641032db71fec.pdf	CMA-BENIN	ARRIVEE DIRECTE	2023-03-14 09:39:55	38	4	t	N°003-2023/CMA-B/SG/DAF/C-SAF/SA	6	2023-01-04	\N	SP	CONFIDENTIEL	2023-01-04	\N	\N	20
16	Fournitures et pose de climatiseurs complémentaires dans l'immeuble retenu pour servir de bureaux à l'A.R.Sl	PRMP-MEF-N00006-DU-04-01-2023-6410418d1dc81.pdf	PRMP MEF	ARRIVEE DIRECTE	2023-03-14 10:42:36	38	4	t	N°0006/MEF/DC/SGM/DGML/DPIB/STr/SP	6	2023-01-04	\N	SP	CONFIDENTIEL	2023-01-04	\N	\N	20
9	Demande de certificat de non attribution de logement administratif.	0363-63f600ff3c010.pdf	ZINSOU GUALBERT RAFIOU	ARRIVEE DIRECTE	2023-02-22 12:48:15	28	4	t	sans référence	363	2023-02-21	\N	SA	RESTREINT	2023-02-21	\N	\N	40
21	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0b1d351df.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 20:53:00	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
25	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0d2612c34.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 21:01:41	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
26	pôiuytrezsrdtfgyuhijouytrsd	EDT-M2-IRT-20-MARS-2023-641a0e5b4375c.pdf	KHBFJBVFKJD	ARRIVEE PAR CAB	2023-03-21 21:06:51	38	3	t	fdsfdxw	4	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
27	pôiuytrezsrdtfgyuhijouytrsd	EDT-M2-IRT-20-MARS-2023-641a1060e5fff.pdf	DFJS	ARRIVEE PAR CAB	2023-03-21 21:15:28	38	7	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
14	Déménagement du siège de l'ARCHA	ARCHA-N00007-DU-04-01-2023-64103f2deb653.pdf	ARCHA	ARRIVEE DIRECTE	2023-03-14 10:32:29	38	4	t	N°0002/MEF/CAB/DGML/SBAC/SP	7	2023-01-04	\N	SP	CONFIDENTIEL	2023-01-04	\N	\N	20
15	Demande d'immeuble	BE-DC-MEF-N00004-DU-04-01-2023-641040a8c0fce.pdf	DC MEF	ARRIVEE DIRECTE	2023-03-14 10:38:48	38	39	t	N°0005/MEF/DC/SGM/DGML/DPIB/SBAC/SP	5	2023-01-04	\N	SP	CONFIDENTIEL	2023-01-04	\N	\N	20
8	Demande de véhicules	DAC-MEF-N00001-DU-13-02-2023-DGML-N00092-DU-13-02-2023-63f4ebb44d525.pdf	CABINET MEF	ARRIVEE DIRECTE	2023-02-21 17:05:07	38	39	t	DACMEF 0001 DU 13-02-2023	92	2023-02-13	\N	SP	CONFIDENTIEL	2023-02-13	\N	\N	20
28	qhfsk ljkdgh lkdj gmslkrfjg lsdfk fdlj fdkm fgj bfukf	EDT-M2-IRT-20-MARS-2023-641a12aa45e77.pdf	DFJS	ARRIVEE PAR AUTRE	2023-03-21 21:25:13	38	14	t	Teste du 28 janvier 2023 à 15h20	4	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
10	Inventaire des biens	ABEVRIT-N00002-DU-03-01-2023-641030c7d3e99.pdf	ABeVRIT	ARRIVEE DIRECTE	2023-03-14 09:31:03	38	4	t	N°0002/MEF/DC/SGM/DGML/DM/SICM/DIAT/SP	2	2023-01-03	\N	SP	CONFIDENTIEL	2023-01-03	\N	\N	20
12	Procès verbaux de négociation du montant de bail administratif pour les délégations de la Chambre des Métiers de l'Artisanat du Bénin des départements ci-après: Abomey-Calavi, Abomey , Azovè, Lokossa, Pobè, Porto-Novo, Djougou,  Natitingou, Kandi et Dassa	CMA-BENIN-N00001-DU-03-01-2023-6410396ecec07.pdf	CMA-BENIN	ARRIVEE DIRECTE	2023-03-14 10:07:58	38	48	t	N°0001/MEF/DC/SGM/DGML/DPIB/SBAC/SP	1	2023-01-03	\N	SP	CONFIDENTIEL	2023-01-03	\N	\N	20
18	dsjfjsdjfock	EDT-M2-IRT-20-MARS-2023-6418849c82a83.pdf	qsdnxw	ARRIVEE DIRECTE	2023-03-20 17:06:52	0	2	t	HDMNONPNZONENNNLNN	12	2023-03-20	\N	DGML	RESTREINT	2023-03-20	\N	\N	46
29	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-642456a1ebfe2.pdf	sdrtfygikj	ARRIVEE PAR SGM	2023-03-29 12:56:33	0	34	t	kyfjdghssethfhetdrtgerdtgfrtf	11	2023-02-28	\N	DGML	PUBLIC	2023-03-15	\N	\N	46
44	TestInterne	638083dd2b9e8-6465321716714.pdf	DGML	INTERNE	2023-05-17 21:59:18	\N	53	t	TestInterne	\N	2023-05-17	\N	DGML	RESTREINT	2023-05-17	\N	\N	45
31	esesrythtyuioiuytreqsedrfgdftgrfcyhtfgyhg	AVIS-ENT-PORTUAIRE-64536f943a5d4.pdf	DFJS	ARRIVEE DIRECTE	2023-05-04 10:40:49	0	41	f	lkjhfdgshfhjgyh	484	2023-05-04	\N	DGML	RESTREINT	2023-05-04	\N	\N	46
17	dsjfjsdjfock	EDT-M2-IRT-20-MARS-2023-64188341bc205.pdf	qsdnxw	ARRIVEE DIRECTE	2023-03-20 17:01:05	0	2	f	HDMNONPNZONENNNLNN	12	2023-03-20	\N	DGML	RESTREINT	2023-03-20	\N	\N	46
22	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0b9942c60.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 20:55:05	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
24	NFZODNPIOZHDNBEAIZNBCIBCIZ	EDT-M2-IRT-20-MARS-2023-641a0ce123b7d.pdf	qsdnxw	ARRIVEE PAR SGM	2023-03-21 21:00:32	38	2	t	Teste du 28 janvier 2023 à 15h20	14	2023-03-21	\N	SP	CONFIDENTIEL	2023-03-21	\N	\N	20
48	pôiuytrezsrdtfgyuhijouytrsd	chef-de-projet-management-humain-647ed9c1ac420.pdf	KHBFJBVFKJD	ARRIVEE DIRECTE	2023-06-06 09:01:21	\N	41	t	SR 1	14	2023-06-06	\N	DGML	RESTREINT	2023-06-06	\N	\N	45
49	qhfsk ljkdgh lkdj gmslkrfjg lsdfk fdlj fdkm fgj bfukf	Cour-de-methodologie-de-memoire-de-recherche-appliquee-64802c8835813.pdf	DFJS	ARRIVEE DIRECTE	2023-06-07 09:06:45	\N	40	t	RéférenceBAH	14	2023-06-07	\N	DGML	RESTREINT	2023-06-07	\N	\N	45
32	dsjfjsdjfock	AVIS-ENT-PORTUAIRE-6454e7efbeea7.pdf	moi	DEPART	2023-05-05 13:26:37	0	15	t	SR 2	4	2023-05-05	30	DGML	RESTREINT	2023-05-05	DI	yfgh	46
30	dsjfjsdjfock	EDT-M2-IRT-20-MARS-2023-64468aa114594.pdf	moi	ARRIVEE PAR CAB	2023-04-24 15:56:44	0	15	t	MLKHJGB?NS	125	2023-04-24	\N	DGML	RESTREINT	2023-04-24	\N	\N	46
50	qhfsk ljkdgh lkdj gmslkrfjg lsdfk fdlj fdkm fgj bfukf	SG-CSA-64802d29cb12e.pdf	KNN	ARRIVEE DIRECTE	2023-06-07 09:09:29	\N	65	t	RéférenceBOO	47	2023-06-07	\N	SP	CONFIDENTIEL	2023-06-07	\N	\N	20
51	kulyjtrdyufgitrsdgjhhfgnjunb	Demande-d-attestation-64802db39842d.pdf	moi	ARRIVEE DIRECTE	2023-06-07 09:11:47	\N	57	t	RéférenceBAAA	75	2023-06-07	\N	SP	CONFIDENTIEL	2023-06-07	\N	\N	20
53	kulyjtrdyufgitrsdgjhhfgnjunb	Demande-d-attestation-648032a0ebeeb.pdf	KHBFJBVFKJD	ARRIVEE DIRECTE	2023-06-07 09:32:48	\N	65	t	SR 3	4	2023-06-07	\N	DGML	RESTREINT	2023-06-07	\N	\N	45
52	kulyjtrdyufgitrsdgjhhfgnjunb	Demande-d-attestation-6480305ec7656.pdf	qsdnxw	ARRIVEE DIRECTE	2023-06-07 09:23:10	\N	40	t	SR 10	86	2023-06-07	\N	SP	CONFIDENTIEL	2023-06-07	\N	\N	20
54	NFZODNPIOZHDNBEAIZNBCIBCIZ	SG-CSA-64803392e043d.pdf	moi	ARRIVEE DIRECTE	2023-06-07 09:36:50	\N	57	t	SR 4	484	2023-06-07	\N	DGML	RESTREINT	2023-06-07	\N	\N	45
55	kulyjtrdyufgitrsdgjhhfgnjunb	Demande-d-attestation-64804d5a24fb5.pdf	sdrtfygikj	ARRIVEE DIRECTE	2023-06-07 11:26:49	\N	41	t	SR 11	11	2023-06-07	\N	SP	CONFIDENTIEL	2023-06-07	\N	\N	20
56	Autorisation	President-du-syndicat-6480906dc82bb.pdf	CNHU	ARRIVEE DIRECTE	2023-06-07 16:13:00	\N	53	t	SR 12	4465	2023-06-30	\N	SP	CONFIDENTIEL	2023-06-14	\N	\N	20
57	linked	CertificatDaccomplissement-Les-fondements-du-referencement-668416bfc4fcd.pdf	{{ dg }}	INTERNE	2024-07-02 17:03:27	\N	41	t	52456	\N	2024-07-02	\N	DGML	RESTREINT	2024-07-02	\N	\N	47
58	hhhhhhhhhhhhhhhhhhhhh	801520776138001718726780-6693ce14a13a1.pdf	dgml	ARRIVEE DIRECTE	2024-07-14 15:09:39	\N	41	f	455555	56565656	2024-07-14	\N	DGML	PUBLIC	2024-07-14	\N	\N	45
59	zzzzzzzzzzzzzzzzzz	801520776138001718726780-1-6693ceced4093.pdf	dddddd	ARRIVEE DIRECTE	2024-07-14 15:12:46	\N	53	t	12456	552	2024-07-14	\N	DGML	PUBLIC	2024-07-14	\N	\N	45
60	eeeeeeeeeeeee	Rg-cor-66a6e2b151c19.pdf	eddd	ARRIVEE DIRECTE	2024-07-29 02:30:39	\N	41	t	deee	13654	2024-07-29	\N	DGML	RESTREINT	2024-07-29	\N	\N	45
61	zzzzzzzzz	References-002-2-66bf6c000bc17.pdf	{{ dg }}	INTERNE	2024-08-16 17:10:54	\N	3	t	1245	\N	2024-08-16	\N	DGML	RESTREINT	2024-08-16	\N	\N	45
\.


--
-- TOC entry 3465 (class 0 OID 16664)
-- Dependencies: 223
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.


--
-- TOC entry 3467 (class 0 OID 16671)
-- Dependencies: 225
-- Data for Name: postes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.postes (id, agent_id, owner_id, niveau, fonction, date_deb, date_fin, status, poste_at, type) FROM stdin;
33	25	0	Division	DRBA	2023-04-10	\N	t	2023-04-10	PERMANENT
34	26	0	Division	DRBM	2023-04-10	\N	t	2023-04-10	PERMANENT
35	27	0	Division	DRL	2023-04-10	\N	t	2023-04-10	PERMANENT
36	29	0	Division	DSC	2023-04-10	\N	t	2023-04-10	PERMANENT
37	30	0	Division	DSTCM	2023-04-10	\N	t	2023-04-10	PERMANENT
38	16	0	Division	DES	2023-04-10	\N	t	2023-04-10	PERMANENT
39	6	0	Division	DLACE	2023-04-10	\N	t	2023-04-10	PERMANENT
40	28	0	Division	SA	2023-04-10	\N	t	2023-04-10	PERMANENT
41	7	0	Division	S/DM	2023-04-10	\N	t	2023-04-10	PERMANENT
42	9	0	Division	S/DPIB	2023-04-10	\N	t	2023-04-10	PERMANENT
43	51	0	Division	S/DGCA	2023-04-10	\N	t	2023-04-10	PERMANENT
44	41	0	Division	S/DGR	2023-04-10	\N	t	2023-04-10	PERMANENT
46	0	0	Service	SAP	2023-01-01	\N	t	2023-04-12	PERMANENT
6	45	0	Directeur	DGML	2023-04-10	\N	t	2023-04-10	PERMANENT
45	0	0	Admin	DGML	2023-01-01	\N	t	2023-04-12	PERMANENT
47	0	0	Directeur	DGML	2023-01-01	\N	t	2023-04-12	PERMANENT
48	50	0	Directeur	ASS	2023-04-28	\N	t	2023-04-28	PERMANENT
49	50	0	Agent	DGML	2023-05-16	\N	t	2023-05-16	PERMANENT
3	42	0	Directeur	DGCA	2023-04-10	\N	t	2023-04-10	PERMANENT
4	46	0	Directeur	DPIB	2023-04-10	\N	t	2023-04-10	PERMANENT
5	47	0	Directeur	DM	2023-04-10	\N	t	2023-04-10	PERMANENT
7	52	0	Directeur	DGR	2023-04-10	\N	t	2023-04-10	PERMANENT
8	49	0	Service	SBAC	2023-04-10	\N	t	2023-04-10	PERMANENT
9	31	0	Service	SAP	2023-04-10	\N	t	2023-04-10	PERMANENT
10	40	0	Service	STr	2023-04-10	\N	t	2023-04-10	PERMANENT
11	35	0	Service	SGMI	2023-04-10	\N	t	2023-04-10	PERMANENT
12	11	0	Service	SBC	2023-04-10	\N	t	2023-04-10	PERMANENT
13	48	0	Service	RSA	2023-04-10	\N	t	2023-04-10	PERMANENT
14	32	0	Service	SCCOCM	2023-04-10	\N	t	2023-04-10	PERMANENT
15	33	0	Service	SCM	2023-04-10	\N	t	2023-04-10	PERMANENT
16	34	0	Service	SET	2023-04-10	\N	t	2023-04-10	PERMANENT
17	3	0	Service	SGBM	2023-04-10	\N	t	2023-04-10	PERMANENT
18	36	0	Service	SMR	2023-04-10	\N	t	2023-04-10	PERMANENT
19	8	0	Service	SMRAEM	2023-04-10	\N	t	2023-04-10	PERMANENT
20	38	0	Service	SP	2023-04-10	\N	t	2023-04-10	PERMANENT
21	39	0	Service	SPSC	2023-04-10	\N	t	2023-04-10	PERMANENT
22	10	0	Division	DD	2023-04-10	\N	t	2023-04-10	PERMANENT
23	12	0	Division	DEC	2023-04-10	\N	t	2023-04-10	PERMANENT
24	14	0	Division	DF	2023-04-10	\N	t	2023-04-10	PERMANENT
25	15	0	Division	DI	2023-04-10	\N	t	2023-04-10	PERMANENT
26	18	0	Division	DMat	2023-04-10	\N	t	2023-04-10	PERMANENT
27	19	0	Division	DMVPC	2023-04-10	\N	t	2023-04-10	PERMANENT
28	20	0	Division	DMVPE	2023-04-10	\N	t	2023-04-10	PERMANENT
29	21	0	Division	DPCAR	2023-04-10	\N	t	2023-04-10	PERMANENT
30	22	0	Division	DPEVL	2023-04-10	\N	t	2023-04-10	PERMANENT
31	23	0	Division	DPSE	2023-04-10	\N	t	2023-04-10	PERMANENT
32	24	0	Division	DR	2023-04-10	\N	t	2023-04-10	PERMANENT
50	50	0	Agent	DGP	2024-07-23	2024-08-04	t	2023-05-25	INTERIMAIRE
51	28	0	Division	goho	2024-07-23	2024-07-28	t	2024-07-23	PERMANENT
\.


--
-- TOC entry 3469 (class 0 OID 16676)
-- Dependencies: 227
-- Data for Name: provenances; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.provenances (id, document_id, structure, numero, date_enregistrement) FROM stdin;
5	24	SGM	74	2023-03-21
6	25	SGM	74	2023-03-21
7	26	SGM	7	2018-01-01
11	29	SGM	47	2023-03-27
8	28	SGM	452	2018-01-01
9	28	CAB	9	2018-01-01
10	28	DGB	65	2018-01-01
14	30	SGM	31	2023-04-05
\.


--
-- TOC entry 3471 (class 0 OID 16680)
-- Dependencies: 229
-- Data for Name: secretariats; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.secretariats (id, direction_id, secretaire, type, owner_id, status) FROM stdin;
5	1	SP	PARTICULIER	0	t
4	4	S/DM	DIRECTION	0	t
3	5	S/DPIB	DIRECTION	0	t
6	3	SA	ADMINISTRATIF	0	t
1	2	SBC	DIRECTION	0	t
2	3	S/DGR	DIRECTION	0	t
\.


--
-- TOC entry 3473 (class 0 OID 16684)
-- Dependencies: 231
-- Data for Name: services; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.services (id, direction_id, code, libelle, status, chef_id, owner_id) FROM stdin;
2	3	DGR	Direction de la Gestion des Ressources	t	\N	0
3	4	DM	Direction du Matériel	t	\N	0
4	5	DPIB	Direction du Patrimoine Immobilier Bâti	t	\N	0
7	5	SBAC	Services des Bâtiments Administratifs et des Contrats	t	49	0
6	3	SAP	Service Administratif et du Personnel	t	31	0
18	5	STr	Services des Travaux	t	40	0
13	3	SGMI	Service de la Gestion des Matières et de l'Informatique	t	35	0
8	3	SBC	Service du Budget et de la Comptabilité	t	11	0
9	4	SCCOCM	Service du Contrôle et de la Centralisation des Opérations Comptables des Matières	t	32	0
10	4	SCM	Service de la Comptabilité des Matières	t	33	0
12	4	SGBM	Service de la Gestion Biens Meubles	t	3	0
16	1	SP	Secrétariat Particulier	t	38	0
17	5	SPSC	Service de la Prospection des Sites et du Contentieux	t	39	0
1	2	DGCA	Direction du Garage Central Administratif	t	\N	0
11	2	SET	Service des Etudes Techniques	t	34	0
14	2	SMR	Service de la Maintenance et des Réformes	t	36	0
15	2	SMRAEM	Service du Matériel Roulant et autres Equipements Motorisés	t	8	0
5	3	RSA	Régie Spéciale d'Avance	t	48	0
\.


--
-- TOC entry 3475 (class 0 OID 16688)
-- Dependencies: 233
-- Data for Name: type_documents; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.type_documents (id, code, libelle, owner_id, direction_id, status) FROM stdin;
53	APB	AUTORISATION DE PRISE EN BAIL	0	4	t
2	LOI	LOI	0	4	t
6	DMM	DEMANDE DE MATIERES	0	3	t
3	ATT	ATTESTATION DE PRESENCE AU POSTE	0	\N	t
4	LET	LETTRE	0	\N	t
10	BAM	BORDEREAU D'AFFECTATION DES MATIERES	0	\N	t
11	BMM	BORDEREAU DE MUTATION DES MATIERES	0	\N	t
14	FIT	FICHE D'INTERVENTION TECHNIQUE	0	\N	t
16	PVR	PV DE RECEPTION	0	\N	t
15	CTR	CONTRAT	0	\N	t
5	NOT	NOTE DE SERVICE	0	\N	t
7	DMC	DEMANDE DE CARBURANTS	0	\N	t
8	OSM	ORDRE DE SORTIE	0	\N	t
9	OEM	ORDRE D'ENTREE	0	\N	t
12	RPI	RAPPORT D'INVENTAIRE	0	\N	t
13	RPA	RAPPORT D'ACTIVITES	0	\N	t
17	ATT	ATTESTATION DE BONNE FIN D'EXECUTION	0	\N	t
18	LET	LETTRE DE SOUMMISSION	0	\N	t
19	TDR	TERMES DE REFERENCE	0	\N	t
20	ETP	ETAT DE PAIEMENT	0	\N	t
21	MDT	MANDAT	0	\N	t
22	FAC	FACTURE	0	\N	t
23	OPT	ORDRE DE PAIEMENT TRESOR	0	\N	t
24	ODM	ORDRE DE MISSION	0	\N	t
25	CHT	CHAQUE TRESOR	0	\N	t
26	QCE	QUITTANCE ATF	0	\N	t
27	MDP	MANDAT DE PAIEMENT	0	\N	t
28	BDT	BORDEREAU DE TRANSMISSION TRESOR	0	\N	t
30	IFU	IDENTIFICATION FISCALE UNIQUE	0	\N	t
31	RIB	RELEVE D'IDENTITE BANCAIRE	0	\N	t
32	ATT	ATTESTATION DE TRAVAIL	0	\N	t
33	ATT	ATTESTATION COLLECTIVE DE PRESENCE AU POSTE	0	\N	t
34	AUT	AUTORISATION DE JOUISSANCE DE CONGES ADMINISTRATIFS	0	\N	t
35	AUT	AUTORISATION D'ABSENCE	0	\N	t
36	CTF	CERTIFICAT DE PRISE DE SERVICE	0	\N	t
37	CET	CERTIFICAT DE NON JOUISSANCE DE CONGES ADMINISTRATIFS	0	\N	t
38	CTF	CERTIFICAT DE PRISE DE FONCTION	0	\N	t
39	NOT	NOTE D'INFORMATION	0	\N	t
40	ARR	ARRETE	0	\N	t
42	ORD	ORDONNANCE	0	\N	t
48	CR	COMPTE RENDU	0	\N	t
49	RAP	RAPPORT	0	\N	t
50	DMR	DEMANDE DE REFORME	0	\N	t
51	DMR	DEMANDE DE RESILIATION DE CONTRAT	0	\N	t
52	RCB	RESILIATION DE CONTRAT DE BAIL	0	\N	t
54	DER	DEMANDE ENTRETIEN/REPARATION	0	\N	t
55	REQ	REQUISITION	0	\N	t
56	LET	LETTRE DE MISE A DISPOSITION	0	\N	t
57	ASF	ATTESTATION DE SERVICE FAIT	0	\N	t
60	DMC	DEMANDE DE CAVA	0	\N	t
61	DMC	DEMANDE DE CERTIFICAT DE NON ATTRIBUTION DE VEHICULE	0	\N	t
62	DMV	DEMANDE DE MIS A DISPOSITION DE VEHICULE	0	\N	t
63	DMC	DEMANDE DE CERTIFICAT DE NON ATTRIBUTION DE LOGEMENT ADMINISTRATIF	0	\N	t
64	DMA	DEMANDE D'AUTORISATION D'ACQUISITION	0	\N	t
65	AVT	AVIS TECHNIQUE	0	\N	t
66	DMA	DEMANDE D'APPUI TECHNIQUE	0	\N	t
67	COM	COMMUNICATION	0	\N	t
68	DMA	DEMANDE D'AGREMENT	0	\N	t
29	QCE	QUITTANCE DROIT DE RENOUVELLEMENT DE CONTRAT	0	\N	t
41	ACC	ACCORD	0	6	t
1	DEC	DECRET	0	8	t
43	DEC	DECISION	0	4	t
\.


--
-- TOC entry 3477 (class 0 OID 16692)
-- Dependencies: 235
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, email, roles, password, niveau, zone, nom, prenom, status, owner_id) FROM stdin;
38	aousmane@finances.bj	["ROLE_USER"]	$2y$13$N6Xqg/osm9x9MDlk5n0/BOJn6aSwO/Y4UqDIRgaQcI76NsACwmWSe	Service	SP	OUSMANE	Amamatou	t	0
1	dahounou@finances.bj	["ROLE_USER"]	$2y$13$c.uAFdUpycsqaSDVM0UKpOiHj8.haKjc.TX0UARqJTjqhNSa4OmvS	Agent	DI	AHOUNOU	Dona Yvon Arnold	t	0
2	fhounsa@finances.bj	["ROLE_USER"]	$2y$13$vH7wXrNyoR.Oqtg.cgDppe6rawYLsQ9GTD.LQzTVCok.3OTYbjWIG	Agent	DM	HOUNSA	Francois Hounmènou	t	0
3	jmayaba@finances.bj	["ROLE_USER"]	$2y$13$N6Xqg/osm9x9MDlk5n0/BOJn6aSwO/Y4UqDIRgaQcI76NsACwmWSe	Agent	DM	MAYABA	JEAN-CLAUDE B. 	t	0
4	hhounsounou@finances.bj	["ROLE_USER"]	$2y$13$fsdAhuIOI/BXi13KuCStG.DW3sE0/WALrPxefaAMCCpJfbrLCn7rS	Agent	SAP	HOUNSOUNOU	Hyppolyte	t	0
5	kakpassiakpa@finances.bj	["ROLE_USER"]	$2y$13$Y8x3B2NV1Nrc5l0HBJrfq./SNwUzI9L4n9uwnqtYbUBPPb8/IP2Bu	Agent	STr	AKPASSIAKPA	Kossi Charles	t	0
6	agbenahoun@finances.bj	["ROLE_USER"]	$2y$13$CtyyptmijQwLaarjzjDqeODYsdN9M1YFLcjTUiYPwZiGbTIuZ5wwK	Agent	STr	GBENAHOUN	Akonédji Loïc	t	0
10	fgossy@finances.bj	["ROLE_USER"]	$2y$13$BDpQHKQED0Cm9ydjz5.UteCI3jSTSXv7epNJbe5H/p2/140eWLZry	Division	DD	GOSSY	Folly  Vivian M.	t	0
12	ffourn@finances.bj	["ROLE_USER"]	$2y$13$6CUGpxQSBgihaZawEx8.zudDLjr8qdB/IdbUCf4S80r6lMwS21co6	Division	DEC	FOURN	Floris Romaric	t	0
13	ekpakpo@finances.bj	["ROLE_USER"]	$2y$13$rumGwABxL4XRmkMvCMJIZeKrBA1/hGw0SOGkpXt6u9iY640oIah8.	Division	DES	KPAKPO	Ella  Adoko	t	0
15	ofagbenro@finances.bj	["ROLE_USER"]	$2y$13$MzkxTJSD88/LgTUsA4jPUe3/pFw9yQwX21w0lV.niL.IZe5B.csJO	Division	DI	FAGBENRO	Olatoundji	t	0
16	ltchibozo@finances.bj	["ROLE_USER"]	$2y$13$xWzcyWCFzZuBD955pGBWneK.zcpbvYxgMchCZT2jHDC6ntOl6/HAK	Division	DIAT	TCHIBOZO	Lauranda A. S.	t	0
17	ymegnigbeto@finances.bj	["ROLE_USER"]	$2y$13$HHQRMaMX9reG7a6g4P.y7.BaCKngbs5YftIZqPxBq3DTYYTo6t36q	Division	DLACE	MEGNIGBETO	Yvette Fausta M. 	t	0
18	aouorou@finances.bj	["ROLE_USER"]	$2y$13$2wayyGsNKHB1rYJeet.tDenAgbz76MmmY.zkJZV6iBI3anI8AweTu	Division	DMat	OUOROU	Abdou Karim	t	0
19	kdegbo@finances.bj	["ROLE_USER"]	$2y$13$0xW9Ww1d/7rtNxjy1xWJYeFtw4GScYfCclZvXUterua4ZGZnMq8t2	Division	DMVPC	DEGBO	Koami Roland Herbert	t	0
20	sakuesson@finances.bj	["ROLE_USER"]	$2y$13$6pr9rZdc9N8fdYjWhKsiy.S71nsPLxOkKe4xe7UuWS8tqKWAlaFem	Division	DMVPE	AKUESSON	Saint-Cyr	t	0
21	hagbessy@finances.bj	["ROLE_USER"]	$2y$13$zq6wu5ZlL8dpcQEVTGiZlOjctkEDYU0lxifC87ufiDlAzJ8Nj0TX2	Division	DPCAR	AGBESSY	Hervé Serge	t	0
22	smonsou@finances.bj	["ROLE_USER"]	$2y$13$1Dp7yFr3dOxVLpJHjLHgUe9MIGVgkvlQNH7XuUxxQsYcw6zuuGVc.	Division	DPEVL	MONSOU	Sylvie T.S.	t	0
23	asessou@finances.bj	["ROLE_USER"]	$2y$13$1SdbltVwsw1sYD6gRn2bZe8gkLZNm6iIoddckwdnJ53eps01ieiY6	Division	DPSE	SESSOU	Ablawa Mareine	t	0
24	mtossou@finances.bj	["ROLE_USER"]	$2y$13$gMazWo.x0CmiyfxGAwOq5OLZpISxpM8kh85M/Lhweynar8rUeWgZm	Division	DR	TOSSOU	Mênonma Eric	t	0
25	bnoumonvi@finances.bj	["ROLE_USER"]	$2y$13$y.boIID/A9DCJOJF.1.Dm.7.UL3WHHHZQ.Akq0Lic1djr1Ctcfehq	Division	DRBA	NOUMONVI	Bidossèssi Olivier	t	0
26	hhounsou@finances.bj	["ROLE_USER"]	$2y$13$dC74dAGQc5TwWHwHW/YLW.pXItgN3XK8Ye6fYelb95F5qKGCJUTkC	Division	DRBM	HOUNSOU	Hyppolite D.	t	0
27	nagbagan@finances.bj	["ROLE_USER"]	$2y$13$8uk4vB9Q3r8Pr0Pjk1NJ..3TwYwY6Y0z1L8thYhH3aoTfvnfano.S	Division	DRL	AGBAGAN	Nonvignon Fermat	t	0
29	shouankpon@finances.bj	["ROLE_USER"]	$2y$13$ZtXvCaktHP5qetRBq2HnU.HgAH5lFVH4apAM/7m9GngdSl99y3.92	Division	DSC	HOUANKPON	Sètondji Christine	t	0
30	ydotcheme@finances.bj	["ROLE_USER"]	$2y$13$wS/tvOj/14VCePHLfy3woOeHnf/VvTMtUDyBPH7stwg1n6Qczkep6	Division	DSTCM	DOTCHEME	Yémon Eugène	t	0
33	bilaye@finances.bj	["ROLE_USER"]	$2y$13$Ni25tCFy8rjRcGrqWa7lEeuS8NHJwdOz34r08BHMldE/nplcU4goa	Sercice	SCM	ILAYE	Boni Jacques	t	0
34	azountchegbe@finances.bj	["ROLE_USER"]	$2y$13$sc0xPk1zOjdKbXhMx4L.FuoNh1v8D.KzvDHjmBm0gNZVVaQBnDZCW	Sercice	SET	ZOUNTCHEGBE	Amour C.	t	0
36	mgnimagnon@finances.bj	["ROLE_USER"]	$2y$13$Ztg6xGFU0vHFfztOmn7duuhCt1mFy..uijhi5dzf2KEwrqa9X12mW	Sercice	SMR	GNIMAGNON	Marcellin	t	0
40	dsagbohan@finances.bj	["ROLE_USER"]	$2y$13$WsOhzveD9zrHbBDTuz6HvOdjASlC8jiiZ1zPLEcCNgLDVxkKzpuGS	Sercice	STr	SAGBOHAN	Dododji Joël	t	0
42	khouessou@finances.bj	["ROLE_USER"]	$2y$13$P1C.jFy6VX43ZmU/oO37Zes3l.I4cndk.9C/7nRO9L6xE631.7Xyq	Directeur	DGCA	HOUESSOU	Koffi Rufin	t	0
43	cyayi affedjou@finances.bj	["ROLE_USER"]	$2y$13$9XQKrQtNyfDAsxdEdtAeEOtpdo3bdaDE/gsJgOKg3LsCA/oGj1udS	Directeur	DGML	YAYI AFFEDJOU	Clarisse	t	0
44	lamadou djibril@finances.bj	["ROLE_USER"]	$2y$13$6tD6v/v6srL4R5lA7jnDoeLJ2jjlRR2rh2fvVvmmlhzxgv.9y.Jvu	Directeur	DGML	AMADOU DJIBRIL	Labiou	t	0
46	mlafia@finances.bj	["ROLE_USER"]	$2y$13$WNUz.SaPr8/nh5iUdoBEbOTtClENcUIP4vvEbErfQA98CRNbPoMYS	Directeur	DPIB	LAFIA	Moussa	t	0
48	aamoussouvi@finances.bj	["ROLE_USER"]	$2y$13$A0bH0OidHk2iXRz87UjrDeWjfAZ8y875XEDrFgYMFr6suB9jPTowW	Sercice	RSA	AMOUSSOUVI	Akouavi Lydia	t	0
49	miko@finances.bj	["ROLE_USER"]	$2y$13$XI5Xy8IYvLTiOWAkWbHHDOOPwplWodlV9CL0d9KD2G/PVs.gNVqs6	Sercice	SBAC	IKO	Modoukpè Adèle	t	0
32	sndah@finances.bj	["ROLE_USER"]	$2y$13$D.gjCYFXokfCCPOSkDDLj.PgFLf/PMGsvdi02bWh55qO7ZoJLF2/W	Sercice	SBC	N'DAH	Mutchénouwei Serge	t	0
35	salfayessoufou@finances.bj	["ROLE_USER"]	$2y$13$npxdtj8thIfqGzugQKzA4ekDm8W2a45hB4zcK7ojA3FPDcNB7cDo6	Sercice	SGMI	ALFA YESSOUFOU	Saad Adébayo A. G.	t	0
37	fidanichabi@finances.bj	["ROLE_USER"]	$2y$13$CzA1wWuWb73ul0Cs/M7N/elSPSCRs9xBdfoa6.KNqdoI.kmTgIETS	Sercice	SMRAEM	IDANI CHABI	Fousséni	t	0
28	zadam@finances.bj	["ROLE_USER"]	$2y$13$cxRncq28wdE7LNx3cFHe5uWRgEFGszYkH7mD44lkK0TotBTjGkfd2	Division	SA	ADAM	Zakari	t	0
7	mgbehou@finances.bj	["ROLE_USER"]	$2y$13$IDbIq0zFkwOHMm/tv/Z/wuJOUg0dxtg3NUAjniaiJevPwCBpkncsC	Division	S/DM	GBEHOU	Maryse Carmelle Mèdéssè	t	0
9	lsavy@finances.bj	["ROLE_USER"]	$2y$13$QzG1EPaLEN5u2T2OGoEfGOg.hbyIYg160ll4pF1c6lU80H1qed1sK	Division	S/DPIB	SAVY	Léa	t	0
47	fkomahoue@finances.bj	["ROLE_USER"]	$2y$13$KMAJ2idX4KSMKFIum/4Owu8NyOUWmkOLn40x1efMy0VSdePoq3JDu	Directeur	DM	KOMAHOUE	Fidégnon Herman	t	0
11	asalako@finances.bj	["ROLE_USER"]	$2y$13$mEto1u6i/8dkXJ8MiKsEkOARUjwrAyosu0cJDvQtC1nfkCqbvgJhu	Division	DDRA	SALAKO	Ahihonsou Iréné	t	0
55	qsrdfjnrefsd@finances.bj	["ROLE_USER"]	$2y$13$V55r7V2XPhZsWF8A3U/lT.xrADMqYUGniON7cx4W3pTf4zWf6bmqm	Agent	DGML	srdfjnrefsd	qqsetygf	f	0
14	mabihoye@finances.bj	["ROLE_USER"]	$2y$13$xQrFLLKi.INL6nUXCeeaYuHmfmGOi7XuWhXTX1rDjrJXuJQ4s9qDK	Division	DF	ABIHOYE	Mouftaou Adébayo	t	0
0	admin@admin.admin	["ROLE_ADMIN"]	$2y$13$c.uAFdUpycsqaSDVM0UKpOiHj8.haKjc.TX0UARqJTjqhNSa4OmvS	Directeur	DGML	Admin	Admin	t	0
8	kbadoussi@finances.bj	["ROLE_USER"]	$2y$13$sAzqhZYLrBYjIridD6c62OJF/gR.aGK/VavBBUknhoPWNPzDfSZ4i	Division	DAEM	BADOUSSI	Kossi Gildas Sènadé	t	0
39	fakouta@finances.bj	["ROLE_USER"]	$2y$13$UW9GIwWWOon2DBCrB4aYEumwOc.8v8R0tok4RKM7ui94KO0/Za/EO	Sercice	SPSC	AKOUTA	Franck Virgile T.	t	0
51	cguedenon@finances.bj	["ROLE_USER"]	$2y$13$4QDq4q8ohoXTDApqqgAsQOCU.OU9tGuv5Z7zr5/ZzXYTUASO77W/y	Division	S/DGCA	GUEDENON	Clément	t	0
31	cahounou@finances.bj	["ROLE_USER"]	$2y$13$eTrtG9i3gCvB9SflNZ3H2.p4dDBnBUOBPbXgLFwfkTMTvSMKrWVZy	Sercice	SAP	AHOUNOU	Mèdessè Castelle Marie Immaculé B.	t	0
45	rmamam@finances.bj	["ROLE_USER"]	$2y$13$kFn3a7lL91Re8zDxSiECVOalAgiHqDmUbdZjfZV.Z2C9pms//kUvW	Directeur	DGML	MAMAM	Raoufou	t	0
54	dinterim@finances.bj	["ROLE_USER"]	$2y$13$.UQ3Ogj4Ou5kKNQ7vWO5puJFrVY.hq8mVJ2Ewll1vgGwgcUU1CUQe	Agent	DGML	Interim	Dgca	t	0
41	fadimi@finances.bj	["ROLE_USER"]	$2y$13$wQXPWfie/2om1fjTLmwn3eBDWDVrblRpeHpkw0v4GbittvZ5DjB2q	Division	S/DGR	ADIMI	Iyabo Francine O. A.	t	0
52	dgrinterim@finances.bj	["ROLE_USER"]	$2y$13$Dz52OqI2r0ijL2A490.ycuo.EoppeqSmy2uyGDLSpInNvcvTQF67S	Directeur	DGR	Interim	Dgr	t	0
50	lohin@finances.bj	["ROLE_USER"]	$2y$13$E1YZdL3kQIyEARFV.y3Xluw3rDva5pWDG69ACD9iTlrR0lmE6BzKG	Agent	DGML	OHIN	Landry	t	0
\.


--
-- TOC entry 3486 (class 0 OID 0)
-- Dependencies: 215
-- Name: affectations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.affectations_id_seq', 45, true);


--
-- TOC entry 3487 (class 0 OID 0)
-- Dependencies: 217
-- Name: directions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.directions_id_seq', 8, true);


--
-- TOC entry 3488 (class 0 OID 0)
-- Dependencies: 219
-- Name: divisions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.divisions_id_seq', 38, true);


--
-- TOC entry 3489 (class 0 OID 0)
-- Dependencies: 222
-- Name: documents_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.documents_id_seq', 61, true);


--
-- TOC entry 3490 (class 0 OID 0)
-- Dependencies: 224
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- TOC entry 3491 (class 0 OID 0)
-- Dependencies: 226
-- Name: postes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.postes_id_seq', 51, true);


--
-- TOC entry 3492 (class 0 OID 0)
-- Dependencies: 228
-- Name: provenances_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.provenances_id_seq', 14, true);


--
-- TOC entry 3493 (class 0 OID 0)
-- Dependencies: 230
-- Name: secretariats_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.secretariats_id_seq', 6, true);


--
-- TOC entry 3494 (class 0 OID 0)
-- Dependencies: 232
-- Name: services_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.services_id_seq', 18, true);


--
-- TOC entry 3495 (class 0 OID 0)
-- Dependencies: 234
-- Name: type_documents_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.type_documents_id_seq', 68, true);


--
-- TOC entry 3496 (class 0 OID 0)
-- Dependencies: 236
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 55, true);


--
-- TOC entry 3234 (class 2606 OID 16700)
-- Name: affectations affectations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT affectations_pkey PRIMARY KEY (id);


--
-- TOC entry 3240 (class 2606 OID 16702)
-- Name: directions directions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.directions
    ADD CONSTRAINT directions_pkey PRIMARY KEY (id);


--
-- TOC entry 3245 (class 2606 OID 16704)
-- Name: divisions divisions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT divisions_pkey PRIMARY KEY (id);


--
-- TOC entry 3251 (class 2606 OID 16706)
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- TOC entry 3253 (class 2606 OID 16708)
-- Name: documents documents_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT documents_pkey PRIMARY KEY (id);


--
-- TOC entry 3262 (class 2606 OID 16710)
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- TOC entry 3266 (class 2606 OID 16712)
-- Name: postes postes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_pkey PRIMARY KEY (id);


--
-- TOC entry 3269 (class 2606 OID 16714)
-- Name: provenances provenances_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.provenances
    ADD CONSTRAINT provenances_pkey PRIMARY KEY (id);


--
-- TOC entry 3273 (class 2606 OID 16716)
-- Name: secretariats secretariats_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT secretariats_pkey PRIMARY KEY (id);


--
-- TOC entry 3278 (class 2606 OID 16718)
-- Name: services services_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_pkey PRIMARY KEY (id);


--
-- TOC entry 3283 (class 2606 OID 16720)
-- Name: type_documents type_documents_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT type_documents_pkey PRIMARY KEY (id);


--
-- TOC entry 3288 (class 2606 OID 16722)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 3285 (class 1259 OID 16723)
-- Name: idx_1483a5e97e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1483a5e97e3c61f9 ON public.users USING btree (owner_id);


--
-- TOC entry 3280 (class 1259 OID 16724)
-- Name: idx_167633987e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_167633987e3c61f9 ON public.type_documents USING btree (owner_id);


--
-- TOC entry 3281 (class 1259 OID 16725)
-- Name: idx_16763398af73d997; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_16763398af73d997 ON public.type_documents USING btree (direction_id);


--
-- TOC entry 3246 (class 1259 OID 16726)
-- Name: idx_1c40c31150a48f1; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1c40c31150a48f1 ON public.divisions USING btree (chef_id);


--
-- TOC entry 3247 (class 1259 OID 16727)
-- Name: idx_1c40c317e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1c40c317e3c61f9 ON public.divisions USING btree (owner_id);


--
-- TOC entry 3248 (class 1259 OID 16728)
-- Name: idx_1c40c31ed5ca9e6; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1c40c31ed5ca9e6 ON public.divisions USING btree (service_id);


--
-- TOC entry 3235 (class 1259 OID 16729)
-- Name: idx_42091043414710b; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_42091043414710b ON public.affectations USING btree (agent_id);


--
-- TOC entry 3236 (class 1259 OID 16730)
-- Name: idx_42091047e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_42091047e3c61f9 ON public.affectations USING btree (owner_id);


--
-- TOC entry 3237 (class 1259 OID 16731)
-- Name: idx_42091048e43489f; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_42091048e43489f ON public.affectations USING btree (poste_owner_id);


--
-- TOC entry 3238 (class 1259 OID 16732)
-- Name: idx_4209104c33f7837; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_4209104c33f7837 ON public.affectations USING btree (document_id);


--
-- TOC entry 3241 (class 1259 OID 16733)
-- Name: idx_495867ec7e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_495867ec7e3c61f9 ON public.directions USING btree (owner_id);


--
-- TOC entry 3242 (class 1259 OID 16734)
-- Name: idx_495867ece82e7ee8; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_495867ece82e7ee8 ON public.directions USING btree (directeur_id);


--
-- TOC entry 3263 (class 1259 OID 16735)
-- Name: idx_5a763c643414710b; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a763c643414710b ON public.postes USING btree (agent_id);


--
-- TOC entry 3264 (class 1259 OID 16736)
-- Name: idx_5a763c647e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a763c647e3c61f9 ON public.postes USING btree (owner_id);


--
-- TOC entry 3274 (class 1259 OID 16737)
-- Name: idx_7332e169150a48f1; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_7332e169150a48f1 ON public.services USING btree (chef_id);


--
-- TOC entry 3275 (class 1259 OID 16738)
-- Name: idx_7332e1697e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_7332e1697e3c61f9 ON public.services USING btree (owner_id);


--
-- TOC entry 3276 (class 1259 OID 16739)
-- Name: idx_7332e169af73d997; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_7332e169af73d997 ON public.services USING btree (direction_id);


--
-- TOC entry 3258 (class 1259 OID 16740)
-- Name: idx_75ea56e016ba31db; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);


--
-- TOC entry 3259 (class 1259 OID 16741)
-- Name: idx_75ea56e0e3bd61ce; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);


--
-- TOC entry 3260 (class 1259 OID 16742)
-- Name: idx_75ea56e0fb7336f0; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);


--
-- TOC entry 3267 (class 1259 OID 16743)
-- Name: idx_81307960c33f7837; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_81307960c33f7837 ON public.provenances USING btree (document_id);


--
-- TOC entry 3270 (class 1259 OID 16744)
-- Name: idx_a0f54b6c7e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a0f54b6c7e3c61f9 ON public.secretariats USING btree (owner_id);


--
-- TOC entry 3271 (class 1259 OID 16745)
-- Name: idx_a0f54b6caf73d997; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a0f54b6caf73d997 ON public.secretariats USING btree (direction_id);


--
-- TOC entry 3254 (class 1259 OID 16746)
-- Name: idx_a2b072887e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b072887e3c61f9 ON public.documents USING btree (owner_id);


--
-- TOC entry 3255 (class 1259 OID 16747)
-- Name: idx_a2b072888826afa6; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b072888826afa6 ON public.documents USING btree (type_document_id);


--
-- TOC entry 3256 (class 1259 OID 16748)
-- Name: idx_a2b072888e43489f; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b072888e43489f ON public.documents USING btree (poste_owner_id);


--
-- TOC entry 3257 (class 1259 OID 16749)
-- Name: idx_a2b07288cf18bb82; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b07288cf18bb82 ON public.documents USING btree (reponse_id);


--
-- TOC entry 3286 (class 1259 OID 16750)
-- Name: uniq_1483a5e9e7927c74; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1483a5e9e7927c74 ON public.users USING btree (email);


--
-- TOC entry 3284 (class 1259 OID 16751)
-- Name: uniq_16763398a4d60759; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_16763398a4d60759 ON public.type_documents USING btree (libelle);


--
-- TOC entry 3249 (class 1259 OID 16752)
-- Name: uniq_1c40c3177153098; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1c40c3177153098 ON public.divisions USING btree (code);


--
-- TOC entry 3243 (class 1259 OID 16753)
-- Name: uniq_495867ec77153098; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_495867ec77153098 ON public.directions USING btree (code);


--
-- TOC entry 3279 (class 1259 OID 16754)
-- Name: uniq_7332e16977153098; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_7332e16977153098 ON public.services USING btree (code);


--
-- TOC entry 3313 (class 2620 OID 16755)
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- TOC entry 3312 (class 2606 OID 16756)
-- Name: users fk_1483a5e97e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT fk_1483a5e97e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3310 (class 2606 OID 16761)
-- Name: type_documents fk_167633987e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT fk_167633987e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3311 (class 2606 OID 16766)
-- Name: type_documents fk_16763398af73d997; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT fk_16763398af73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);


--
-- TOC entry 3295 (class 2606 OID 16771)
-- Name: divisions fk_1c40c31150a48f1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c31150a48f1 FOREIGN KEY (chef_id) REFERENCES public.users(id);


--
-- TOC entry 3296 (class 2606 OID 16776)
-- Name: divisions fk_1c40c317e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c317e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3297 (class 2606 OID 16781)
-- Name: divisions fk_1c40c31ed5ca9e6; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c31ed5ca9e6 FOREIGN KEY (service_id) REFERENCES public.services(id);


--
-- TOC entry 3289 (class 2606 OID 16786)
-- Name: affectations fk_42091043414710b; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091043414710b FOREIGN KEY (agent_id) REFERENCES public.users(id);


--
-- TOC entry 3290 (class 2606 OID 16791)
-- Name: affectations fk_42091047e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091047e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3291 (class 2606 OID 16796)
-- Name: affectations fk_42091048e43489f; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091048e43489f FOREIGN KEY (poste_owner_id) REFERENCES public.postes(id);


--
-- TOC entry 3292 (class 2606 OID 16801)
-- Name: affectations fk_4209104c33f7837; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_4209104c33f7837 FOREIGN KEY (document_id) REFERENCES public.documents(id);


--
-- TOC entry 3293 (class 2606 OID 16806)
-- Name: directions fk_495867ec7e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.directions
    ADD CONSTRAINT fk_495867ec7e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3294 (class 2606 OID 16811)
-- Name: directions fk_495867ece82e7ee8; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.directions
    ADD CONSTRAINT fk_495867ece82e7ee8 FOREIGN KEY (directeur_id) REFERENCES public.users(id);


--
-- TOC entry 3302 (class 2606 OID 16816)
-- Name: postes fk_5a763c643414710b; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c643414710b FOREIGN KEY (agent_id) REFERENCES public.users(id);


--
-- TOC entry 3303 (class 2606 OID 16821)
-- Name: postes fk_5a763c647e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c647e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3307 (class 2606 OID 16826)
-- Name: services fk_7332e169150a48f1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e169150a48f1 FOREIGN KEY (chef_id) REFERENCES public.users(id);


--
-- TOC entry 3308 (class 2606 OID 16831)
-- Name: services fk_7332e1697e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e1697e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3309 (class 2606 OID 16836)
-- Name: services fk_7332e169af73d997; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e169af73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);


--
-- TOC entry 3304 (class 2606 OID 16841)
-- Name: provenances fk_81307960c33f7837; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.provenances
    ADD CONSTRAINT fk_81307960c33f7837 FOREIGN KEY (document_id) REFERENCES public.documents(id);


--
-- TOC entry 3305 (class 2606 OID 16846)
-- Name: secretariats fk_a0f54b6c7e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT fk_a0f54b6c7e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3306 (class 2606 OID 16851)
-- Name: secretariats fk_a0f54b6caf73d997; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT fk_a0f54b6caf73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);


--
-- TOC entry 3298 (class 2606 OID 16856)
-- Name: documents fk_a2b072887e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072887e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- TOC entry 3299 (class 2606 OID 16861)
-- Name: documents fk_a2b072888826afa6; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072888826afa6 FOREIGN KEY (type_document_id) REFERENCES public.type_documents(id);


--
-- TOC entry 3300 (class 2606 OID 16866)
-- Name: documents fk_a2b072888e43489f; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072888e43489f FOREIGN KEY (poste_owner_id) REFERENCES public.postes(id);


--
-- TOC entry 3301 (class 2606 OID 16871)
-- Name: documents fk_a2b07288cf18bb82; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b07288cf18bb82 FOREIGN KEY (reponse_id) REFERENCES public.documents(id);


-- Completed on 2025-05-11 17:45:30

--
-- PostgreSQL database dump complete
--


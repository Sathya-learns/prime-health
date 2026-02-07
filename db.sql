CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table users
INSERT INTO users (id, username, password) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');


CREATE TABLE logo (
  id INT(11) NOT NULL AUTO_INCREMENT,
  xfile VARCHAR(1000) NOT NULL,
  ufile VARCHAR(1000) NOT NULL,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci


CREATE TABLE home_banner (
    id INT AUTO_INCREMENT PRIMARY KEY,
    banner_image VARCHAR(255) NOT NULL,
    status TINYINT DEFAULT 1
);



CREATE TABLE home_aboutus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    section_title VARCHAR(255),      -- e.g., "ABOUT US"
    main_heading VARCHAR(255),       -- e.g., "PrimeHealth"
    sub_heading VARCHAR(255),        -- e.g., "Trusted Medical Excellence"
    
    image VARCHAR(255),              -- e.g., "images/aboutdoctors.jpg"
    image_overlay TINYINT DEFAULT 0, -- 0 = no overlay, 1 = overlay
    
    point1 TEXT,                     -- First point text
    point2 TEXT,                     -- Second point text
    point3 TEXT,                     -- optional third point
    
    
    
    sort_order INT DEFAULT 1,        -- If multiple About sections in future
    status TINYINT DEFAULT 1         -- 1 = active, 0 = inactive
);

CREATE TABLE home_trusted_header (
    id INT AUTO_INCREMENT PRIMARY KEY,
    heading VARCHAR(255) NOT NULL,
    sub_paragraph TEXT NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE home_trusted_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stat_value INT NOT NULL,
    stat_suffix VARCHAR(10) DEFAULT '',
    stat_text VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO home_trusted_header (heading, sub_paragraph)
VALUES (
  'Trusted Healthcare Excellence',
  'Delivering quality care with experience, compassion, and results'
);

CREATE TABLE home_ads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    badge VARCHAR(255) NOT NULL,
    heading VARCHAR(255) NOT NULL,
    sub_heading VARCHAR(255) NULL,
    paragraph TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE whatwedo (
  id INT AUTO_INCREMENT PRIMARY KEY,
  heading VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE home_experts_main (
  id INT AUTO_INCREMENT PRIMARY KEY,
  heading VARCHAR(255) NOT NULL,
  paragraph TEXT NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO home_experts_main (heading, paragraph)
VALUES (
  'Our Medical Experts Doctors',
  'Our team of experienced and compassionate doctors are dedicated
to providing high-quality medical care for you and your family.'
);


CREATE TABLE home_experts_doctors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  doctor_name VARCHAR(255) NOT NULL,
  profession VARCHAR(255) NOT NULL,
  specialties TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE about_ads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  main_heading VARCHAR(255) NOT NULL,
  sub_heading VARCHAR(255) NOT NULL,
  paragraph TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);





CREATE TABLE values_section (
  id INT AUTO_INCREMENT PRIMARY KEY,
  main_heading VARCHAR(255) NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE values_list (
  id INT AUTO_INCREMENT PRIMARY KEY,
  value_heading VARCHAR(255) NOT NULL,
  value_paragraph TEXT NOT NULL,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE whychoose (
  id INT AUTO_INCREMENT PRIMARY KEY,
  image VARCHAR(255) DEFAULT NULL,        -- only row1 uses
  main_title VARCHAR(255) DEFAULT NULL,   -- only row1 uses
  sub_title VARCHAR(255) DEFAULT NULL,    -- feature heading
  sub_content TEXT DEFAULT NULL,          -- feature desc
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE home_services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    image VARCHAR(255) DEFAULT NULL,         -- only row1 uses (center image)
    main_title VARCHAR(255) DEFAULT NULL,    -- only row1 uses (section title)
    main_paragraph TEXT DEFAULT NULL,        -- only row1 uses (top paragraph)
    
    sub_title VARCHAR(255) DEFAULT NULL,     -- feature heading
    sub_content TEXT DEFAULT NULL,           -- feature description
    link VARCHAR(255) DEFAULT NULL,          -- optional feature link
    
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE services_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  
  main_title VARCHAR(255) DEFAULT NULL,      -- Provides Our Best Services
  section_image VARCHAR(255) DEFAULT NULL,   -- facility6.jpg
  
  item_title VARCHAR(255) DEFAULT NULL,      -- Diagnostic testing
  item_content TEXT DEFAULT NULL,            -- Description
  
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                    ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE service_doctors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  type ENUM('section','doctor') NOT NULL DEFAULT 'doctor',

  -- SECTION FIELDS (only for type = 'section')
  
  main_title VARCHAR(255) DEFAULT NULL,
  description TEXT DEFAULT NULL,

  -- DOCTOR FIELDS (only for type = 'doctor')
  image VARCHAR(255) DEFAULT NULL,
  doc_name VARCHAR(255) DEFAULT NULL,
  profession VARCHAR(255) DEFAULT NULL,
  speciality TEXT DEFAULT NULL,

  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE faq_section (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    answer TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    main_title VARCHAR(255) DEFAULT NULL,
    dept_title VARCHAR(255) NOT NULL,
    dept_image VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE treatment_projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(255) NOT NULL,
    project_image VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE service_details (
  id INT AUTO_INCREMENT PRIMARY KEY,
  service_name VARCHAR(255),      -- Cardiology Care
  banner_heading VARCHAR(255),
  banner_image VARCHAR(255),

  main_heading VARCHAR(255),
  intro_text TEXT,
  left_image VARCHAR(255),
  doctor_name VARCHAR(255),
  doctor_info TEXT,
  success_text TEXT,

  prevention_heading VARCHAR(255),
  prevention_cards TEXT,          -- JSON array

  about_title VARCHAR(255),
  about_desc TEXT,
  stats JSON,                     -- example: {"Cardiology":80,"Gynecology":50,...}

  slug VARCHAR(255),
  status TINYINT DEFAULT 1,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE blog_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    blog_id INT NOT NULL,
    question_heading VARCHAR(255) NOT NULL,
    answer TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (blog_id) REFERENCES blogs(id) ON DELETE CASCADE
);


CREATE TABLE about_banner (
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    banner_image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE project_details (
  id INT AUTO_INCREMENT PRIMARY KEY,
  
  -- DROPDOWN 1: Main Project Category
  project_category VARCHAR(255),  -- e.g., "Cardiac Care", "Orthopedic", "Neurology"
  
  -- DROPDOWN 2: Specific Project Name (under category)
  project_name VARCHAR(255),      -- e.g., "Angioplasty Treatment", "Knee Replacement"
  
  -- DROPDOWN 3: Treatment Type (under project name)
  treatment_type VARCHAR(255),    -- e.g., "Minimal Invasive", "Robotic Surgery", "Traditional"
  
  -- BANNER SECTION
  banner_image VARCHAR(255),
  banner_heading VARCHAR(255),
  
  -- TREATMENT 1 SECTION
  treatment_name_1 VARCHAR(255),
  treatment_image_1 VARCHAR(255),
  treatment_description_1 TEXT,
  treatment_details_1 TEXT,
  
  -- TREATMENT 2 SECTION
  treatment_name_2 VARCHAR(255),
  treatment_image_2 VARCHAR(255),
  treatment_description_2 TEXT,
  treatment_details_2 TEXT,
  
  
  -- STATUS & SEO
  slug VARCHAR(255) UNIQUE,
  meta_title VARCHAR(255),
  meta_description TEXT,
  status TINYINT DEFAULT 1,       -- 1=Active, 0=Inactive
  
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
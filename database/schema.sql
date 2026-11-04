CREATE TABLE thesis_projects (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    raw_idea TEXT NOT NULL,
    approved_title VARCHAR(255) NULL,
    sdlc_method VARCHAR(100) NULL,
    preferred_stack JSON NULL,
    problem_statements_json JSON NULL,
    literature_gap_json JSON NULL,
    system_design_json JSON NULL,
    testing_metrics_json JSON NULL,
    chapter_drafts_json JSON NULL,
    defense_simulation_logs JSON NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

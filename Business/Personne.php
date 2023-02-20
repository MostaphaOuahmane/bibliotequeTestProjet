<?php
    class Personne {
        protected $id_personne;
        protected $email;
        protected $mot_de_passe;
        protected $role=0;
        

        public function __construct($email,$mot_de_passe)
        {
            $this->email=$email;
            $this->mot_de_passe=$mot_de_passe;
            $this->role =0 ;
        }

        /**
         * Get the value of id_personne
         */
        public function getIdPersonne()
        {
                return $this->id_personne;
        }

   

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of mot_de_passe
         */
        public function getMotDePasse()
        {
                return $this->mot_de_passe;
        }

        /**
         * Set the value of mot_de_passe
         */
        public function setMotDePasse($mot_de_passe): self
        {
                $this->mot_de_passe = $mot_de_passe;

                return $this;
        }

        /**
         * Get the value of role
         */
        public function getRole()
        {
                return $this->role;
        }

        /**
         * Set the value of role
         */
        public function setRole($role): self
        {
                $this->role = $role;

                return $this;
        }
    }
?>
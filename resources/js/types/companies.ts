export interface Company {
  id: number;
  name: string;
  description: string | null;
  ruc: string;
  rif: string;
  email: string | null;
  logo: string | null;
  website: string | null;
  phone: string;
  address: string;
  created_at: string;
  updated_at: string;
}

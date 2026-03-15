import { Head, useForm } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem, Filters, PageLinkItem } from '@/types';
import Pagination from '@/components/company-pagination';
import { index } from '@/routes/company';
import CompanySearch from '@/components/company-search';
import CompanyList from '@/components/company-list';
import { Company } from '@/types/companies';
import { Button } from '@/components/ui/button';
import { Dialog, DialogTrigger } from "@/components/ui/dialog"
import DialogCompanyCreate from './modal-create';
import { Plus } from "lucide-react"

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'company',
    href: index.url()
  },
];

type CompanyPaginated = {
  data: Company[];
  links: PageLinkItem[];
}

type IndexProps = {
  companies: CompanyPaginated,
  filters: Filters
};

export default function Index({ companies, filters }: IndexProps) {
  const { data, setData } = useForm({
    search: filters.search || '',
    perPage: filters.perPage,
    sortBy: filters.sortBy,
    sortDirection: filters.sortDirection
  });

  return (
    <AppLayout breadcrumbs={breadcrumbs}>
      <Head title="Company" />
      <div className='flex justify-col gap-4'>
        <h1 className='text-2xl font-semibold'>Company</h1>
        <p>Manage your company information here.</p>
      </div>
      <>
        <div className='flex h-full flex-col gap-4 rounded-xl p-4'>
          <div className='w-full max-w-7xl self-center space-y-2'>
            <CompanySearch
              filters={filters}
              search={data.search || ''}
              setSeach={(value: string) => setData('search', value)}
            />


            <Dialog>
              <DialogTrigger asChild>
                <Button variant="outline">Share</Button>
              </DialogTrigger>
              <DialogCompanyCreate />
            </Dialog>






            <CompanyList
              companies={companies.data}
              filters={filters}
            />
            <Pagination
              links={companies.links}
              filters={filters}
              currentPage={data.perPage}
              setCurrentePage={(page: number) => setData('perPage', page)}
            />
          </div>
        </div>
      </>
    </AppLayout >
  );
}

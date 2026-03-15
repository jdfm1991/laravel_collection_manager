import { Head, useForm } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem, Filters, PageLinkItem } from '@/types';
import Pagination from '@/components/company-pagination';
import { index } from '@/routes/company';
import CompanySearch from '@/components/company-search';
import CompanyList from '@/components/company-list';
import { Company } from '@/types/companies';
import { TableCell, TableRow } from '@/components/ui/table';

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
    /*sortBy: filters.sortBy,
    sortDirection: filters.sortDirection */
  });

  return (
    <AppLayout breadcrumbs={breadcrumbs}>
      <Head title="Company" />
      <div><h1>Company</h1></div>
      <>
        <div className='flex h-full flex-col gap-4 rounded-xl p-4'>
          <div className='w-full max-w-7xl self-center space-y-2'>
            <CompanySearch
              filters={filters}
              search={data.search || ''}
              setSeach={(value: string) => setData('search', value)}
            />
            {companies.data.length > 0 ? (
              <>
                <CompanyList companies={companies.data} />
                <Pagination
                  links={companies.links}
                  filters={filters}
                  currentPage={data.perPage}
                  setCurrentePage={(page: number) => setData('perPage', page)}
                />
              </>
            ) :
              (
                <TableRow>
                  <TableCell colSpan={3}>Data Not Found</TableCell>
                </TableRow>
              )
            }
          </div>
        </div>
      </>
    </AppLayout >
  );
}

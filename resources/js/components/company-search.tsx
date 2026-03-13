import { router, useForm } from '@inertiajs/react';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Button } from '@/components/ui/button';
import { X } from 'lucide-react';
import React from 'react';
import { index } from '@/routes/company';
import { Filters } from '@/types';

type companySearchProps = {
  search: string,
  setSeach: (value: string) => void,
  filters: Filters
};

export default function CompanySearch({ search, setSeach }: companySearchProps ) {

  const [timerId, setTimerId] = React.useState<NodeJS.Timeout | null>(null);

  //clear the timeout
  React.useEffect(() => {
    return () => {
      if (timerId) {
        clearTimeout(timerId);
      }
    }
  }, [timerId]);

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    e.preventDefault();
    console.log(e.target.value);
    const userInput = e.target.value;
    setSeach(userInput);

    if (timerId) {
      clearTimeout(timerId);
    }

    const timeout = setTimeout(() => {
      const queryString = userInput ? { search: userInput } : {};

      router.get(index().url, queryString, {
        preserveState: true,
        preserveScroll: true
      });
    }, 800);
    setTimerId(timeout);
  }

  const handleReset = () => {
    setSeach('');

    const queryString = { search: '' };

    router.get(index().url, queryString, {
      preserveState: true,
      preserveScroll: true
    })
  }

  return (
    <div className="flex overflow-x-auto w-md">
      <div className="flex items-center w-full space-y-2">
        <Label className='p-2'>Search</Label>
        <Input
          type="text"
          placeholder='Search Company By Name or Email...'
          name='search'
          onChange={handleChange}
          value={search}
        />
      </div>
      <Button
        variant='destructive'
        className='self-end cursor-pointer'
        onClick={handleReset}
      >
        <X />
      </Button>
    </div>
  )
}
import { Filters, PageLinkItem } from "@/types";
import { Link, router } from "@inertiajs/react";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { index } from "@/routes/company";

type PaginationProps = {
  links: PageLinkItem[],
  currentPage: number,
  setCurrentePage: (page: number) => void,
  filters: Filters
};

export default function Pagination({ links, filters, currentPage, setCurrentePage }: PaginationProps) {

  const handleChange = (value: string) => {
    const newPerPage = value;
    setCurrentePage(parseInt(newPerPage));

    router.get(index().url, { ...filters, perPage: newPerPage }, {
      preserveState: true,
      preserveScroll: true
    });
  }

  return (
    <>
      <div className="flex flex-wrap justify-center items-center gap-1">
        {links.map((link, index) => (
          <Link
            key={index}
            href={link.url ?? '#'}
            dangerouslySetInnerHTML={{ __html: link.label }}
            className={`px-3 py-1 border rounded text-sm
                ${link.active ? "bg-blue-500 text-blue" : "bg-white text-gray-700 hover:bg-gray-100"}
                ${!link.url ? "text-gray-400 cursor-not-allowed" : ""}`}
          />
        ))}
      </div>
    </>

  )
}

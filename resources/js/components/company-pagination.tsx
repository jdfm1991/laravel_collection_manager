import { Filters, PageLinkItem } from "@/types";
import { Link, router } from "@inertiajs/react";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { index } from "@/routes/company";
import { useState } from "react";

type PaginationProps = {
  links: PageLinkItem[],
  currentPage: number,
  setCurrentePage: (page: number) => void,
  filters: Filters
};

export default function Pagination({ links, currentPage, setCurrentePage, filters }: PaginationProps) {

  const handleChange = (value: string) => {
    const newPerPage = value;
    setCurrentePage(parseInt(newPerPage));
    router.get(index().url, { ...filters, perPage: newPerPage }, {
      preserveState: true,
      preserveScroll: true
    });
  }

  return (
    <div className="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6">
      <div className="flex items-center space-x-2">
        <Label>Per Page</Label>
        <Select value={currentPage.toString()} onValueChange={handleChange}>
          <SelectTrigger className="w-[80px]">
            <SelectValue placeholder="Per Page" />
          </SelectTrigger>
          <SelectContent>
            <SelectItem value="5">5</SelectItem>
            <SelectItem value="10">10</SelectItem>
            <SelectItem value="15">15</SelectItem>
            <SelectItem value="20">20</SelectItem>
            <SelectItem value="50">50</SelectItem>
            <SelectItem value="100">100</SelectItem>
          </SelectContent>
        </Select>
      </div>
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
    </div>

  )
}
